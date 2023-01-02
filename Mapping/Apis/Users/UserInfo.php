<?php


namespace Mapping\Apis\Users;


use Mapping\Interfaces\EntityInterface;

class UserInfo implements EntityInterface
{
    /**
     * @var
     * @UserInfoDataMapper(json_field="address")
     */
    protected $address;

    /**
     * @var
     * @UserInfoDataMapper(json_field="tel")
     */
    protected $telephone;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }


}
