<?php

namespace App\Http\Controllers;


use App\Apis\Users\Interfaces\EntityInterface;
use App\Http\ApiResponses;
use App\Traits\DataMapper;
use JetBrains\PhpStorm\NoReturn;
use ReflectionException;


class DataMapperController extends Controller
{
    use DataMapper;

    /**
     * This Method we can see the Input of Api and the output of mapper class
     * @param ApiResponses $apiResponses
     * @param EntityInterface $entity
     * @return void
     * @throws ReflectionException
     */
    #[NoReturn] public function index(ApiResponses $apiResponses, EntityInterface $entity): void
    {
        $data = $apiResponses->getData();
        $entity = $this->init($data, $entity);

        echo 'API Input';
        dump($data);
        echo 'Mapping Result';
        dd($entity);
    }

}
