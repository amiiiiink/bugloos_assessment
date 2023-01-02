<?php

namespace Mapping\Controllers;


use App\Http\Controllers\Controller;
use JetBrains\PhpStorm\NoReturn;

use Mapping\Apis\Responses\ApiResponses;
use Mapping\Interfaces\EntityInterface;
use Mapping\Traits\DataMapper;
use Mtownsend\XmlToArray\XmlToArray;

class DataMapperController extends Controller
{
    use DataMapper;

    /**
     * @param ApiResponses $apiResponses
     * @param EntityInterface $entity
     * @return void
     */
    #[NoReturn] public function __invoke(ApiResponses $apiResponses, EntityInterface $entity): void
    {

//        $file = 'api.json';
        $file = 'api.xml';
        $data = $apiResponses->getData($file);
        try {
            $result = $this->startMapping($data, $entity);

            echo 'API Input';
            dump($apiResponses->getData($file));
            echo 'Mapping Result';
            dd($result);

        } catch (\Exception $e) {
           echo  "Error : ". $e->getMessage();
        }


    }

}
