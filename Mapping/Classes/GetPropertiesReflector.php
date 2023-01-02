<?php

namespace Mapping\Classes;
use ReflectionException;
use ReflectionProperty;

class GetPropertiesReflector
{

    /**
     * @param $entity
     * @return ReflectionProperty[]
     * @throws ReflectionException
     */
    public function getClassPropertiesByReflection($entity): array
    {
        return (new \ReflectionClass($entity))->getProperties();
    }
}
