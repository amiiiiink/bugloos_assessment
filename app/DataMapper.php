<?php
namespace App;

use Doctrine\Common\Annotations\Annotation;

/**
 * Class DataMapper.
 *
 * @Annotation
 * @Annotation\Target({"PROPERTY"})
 */
class DataMapper
{
    public $json_field;
}
