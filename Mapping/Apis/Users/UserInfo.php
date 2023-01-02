<?php


namespace Mapping\Apis\Users;


use Mapping\Interfaces\EntityInterface;

class UserInfo implements EntityInterface
{
    /**
     * @var
     * @UserInfoDataMapper(json_field="address")
     */
    protected mixed $address;

    /**
     * @var
     * @UserInfoDataMapper(json_field="tel")
     */
    protected mixed $telephone;

    /**
     * @return mixed
     */
    public function getAddress(): mixed
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress(mixed $address): static
    {
        $this->address = $address;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getTelephone(): mixed
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone(mixed $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }


}
