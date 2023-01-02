<?php

namespace App;

class User
{

    /**
     * @var
     * @DataMapper(json_field="user__name")
     */
    protected $username;
    /**
     * @var
     * @DataMapper(json_field="full_name")
     */
    protected $fullname;
    /**
     * @var
     * @DataMapper(json_field="bio")
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
     * @return mixed
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * @param mixed $bio
     *
     * @return User
     */
    public function setBio($bio)
    {
        $this->bio = $bio;

        return $this;
    }
}
