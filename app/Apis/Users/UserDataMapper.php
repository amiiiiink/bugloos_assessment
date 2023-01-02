<?php
namespace App\Apis\Users;

use App\Apis\Users\Interfaces\DataMapperInterface;

/**
 * Class DataMapper.
 *
 * @Annotation
 * @Annotation\Target({"PROPERTY"})
 */
class UserDataMapper implements DataMapperInterface
{
    public $json_field;
}

