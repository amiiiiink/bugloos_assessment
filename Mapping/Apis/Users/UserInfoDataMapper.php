<?php
namespace Mapping\Apis\Users;
use Mapping\Interfaces\DataMapperInterface;
/**
 * Class DataMapper.
 *This Class Is Using Annotation for UserInfo Array
 * @Annotation
 * @Annotation\Target({"PROPERTY"})
 */
class UserInfoDataMapper implements DataMapperInterface
{
    public $json_field;
}
