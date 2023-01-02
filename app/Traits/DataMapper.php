<?php

namespace App\Traits;

use App\Apis\Users\Interfaces\EntityInterface;

use Doctrine\Common\Annotations\AnnotationReader;
use ReflectionException;
use ReflectionProperty;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Symfony\Component\PropertyAccess\PropertyAccessor;

trait DataMapper
{

    protected PropertyAccessor $propertyAccessor;
    protected AnnotationReader $annotationReader;

    public function __construct(AnnotationReader $annotationReader)
    {
        $this->propertyAccessor = PropertyAccess::createPropertyAccessor();
        $this->annotationReader = $annotationReader;
    }

    /**
     * @param Mixed $data
     * @param EntityInterface $entity
     * @return EntityInterface
     * @throws ReflectionException
     */
    public function init(mixed $data, EntityInterface $entity): EntityInterface
    {
        return $this->mapProperties($entity, $data);
    }

    /**
     * @param EntityInterface $entity
     * @param mixed $data
     * @return EntityInterface
     * @throws ReflectionException
     */
    private function mapProperties(EntityInterface $entity, mixed $data): EntityInterface
    {
        $properties = $this->getClassPropertiesByReflection($entity);
        foreach ($properties as $property) {
            list($name, $value) = $this->_map($property, $data);
            $this->propertyAccessor->setValue($entity, $name, $value);
        }
        return $entity;
    }


    private function _map( $property, array $result): array
    {
        $propertyAnnotation = $this->getPropertyDataMapper($property);
        $json_field = $propertyAnnotation->json_field;

        if ( $json_field ) {
            $value = $result[$json_field];

            if(gettype($value) === 'array' ) {
                $entity = new ($property->getType()->getName());
                $entity = $this->mapProperties( $entity, $value);

                return [$property->getName(), $entity];

            } else {
                return [$property->getName(), $value];
            }

        } else {
            return [$property->getName(), null];
        }
    }

    /**
     * Finds out Data mapper of given property
     * @param $property
     * @return mixed|object|null
     */
    private function getPropertyDataMapper($property): mixed
    {
        $annotations = $this->annotationReader->getPropertyAnnotations($property);
        return $this->annotationReader->getPropertyAnnotation($property, get_class(current($annotations)));
    }

    /**
     * @param $entity
     * @return ReflectionProperty[]
     * @throws ReflectionException
     */
    private function getClassPropertiesByReflection($entity): array
    {
        return (new \ReflectionClass($entity))->getProperties();
    }

}
