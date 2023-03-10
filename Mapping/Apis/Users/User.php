<?php

namespace Mapping\Apis\Users;



use Mapping\Interfaces\EntityInterface;

class User implements EntityInterface
{

    /**
     * @var
     * @UserDataMapper(json_field="user_name")
     */
    protected string $username;
    /**
     * @var
     * @UserDataMapper(json_field="full_name")
     */
    protected string $fullname;

    /**
     * @var
     * @UserInfoDataMapper(json_field="info")
     */
    protected UserInfo $info;


    /**
     * @var
     * @UserDataMapper(json_field="bio")
     */

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return User
     */
    public function setUsername(mixed $username): static
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullname(): string
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     *
     * @return User
     */
    public function setFullname(mixed $fullname): static
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getInfo(): UserInfo
    {
        return $this->info;
    }

    /**
     * @param UserInfo $info
     *
     * @return User
     */
    public function setInfo(UserInfo $info): static
    {
        $this->info = $info;

        return $this;
    }
}
