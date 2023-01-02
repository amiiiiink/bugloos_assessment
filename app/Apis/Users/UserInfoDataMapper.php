<?php

namespace App\Apis\Users;


use App\Apis\Users\Interfaces\DataMapperInterface;
use Doctrine\Common\Annotations\Annotation;

/**
 * Class DataMapper.
 *
 * @Annotation
 * @Annotation\Target({"PROPERTY"})
 */
class UserInfoDataMapper implements DataMapperInterface
{
    public $json_field;
}
