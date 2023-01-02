<?php

namespace App\Apis\Users;


use App\Apis\Users\Interfaces\EntityInterface;
use App\Apis\Users\UserDataMapper;

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
//    protected $bio;
//    protected $username;
//    protected $fullname;
//    protected $bio;
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param mixed $fullname
     *
     * @return User
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * @return UserInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param UserInfo $info
     *
     * @return User
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }
}
