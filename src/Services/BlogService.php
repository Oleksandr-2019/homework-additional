<?php


namespace App\Services;

class BlogService
{
    private $age;
    private $name;
    private $sportsperson;
    private $createdAt;

    // Getters
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    // Issers
    public function isSportsperson()
    {
        return $this->sportsperson;
    }

    // Setters
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSportsperson($sportsperson)
    {
        $this->sportsperson = $sportsperson;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}
