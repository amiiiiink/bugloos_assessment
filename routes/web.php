<?php

use App\DataMapper;
use App\User;
use Doctrine\Common\Annotations\AnnotationReader;
use Illuminate\Support\Facades\Route;
use Symfony\Component\PropertyAccess\PropertyAccess;

Route::get("/test",function (){

    $response = '{
                        "user__name": "amiiiink",
                        "full_name": "amin karimi"
                 }';


    $result= json_decode($response, true);

    $reader = new AnnotationReader();
    $propertyAccessor = PropertyAccess::createPropertyAccessor();
    $user = new User();
    $reflectionObj = new \ReflectionClass(User::class);
    $properties = $reflectionObj->getProperties();

    foreach ($properties as $key => $property) {
        $propertyAnnotation = $reader->getPropertyAnnotation($property, DataMapper::class);
        $json_field = $propertyAnnotation->json_field;

        if(!$json_field) continue;
        $value = $result[$json_field];
//        dump($result);
//        dd();
//        dump( $result[$json_field]);
        $propertyAccessor->setValue(
            $user,
            $property->getName(),
            $value
        );
    }

    var_dump($user);
});
