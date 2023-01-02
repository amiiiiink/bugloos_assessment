<?php

namespace Mapping\Apis\Users;



use Mapping\Interfaces\DataMapperInterface;

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
