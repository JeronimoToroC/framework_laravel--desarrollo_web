<?php

namespace App\Models;

class User
{

    private $name;
    private $lastname;

    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }
    function getName(): string
    {
        return $this->name;
    }
    function getLastname(): string
    {
        return $this->lastname;
    }
}
