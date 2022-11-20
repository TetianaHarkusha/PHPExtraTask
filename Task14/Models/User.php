<?php

declare(strict_types=1);

namespace Task14;

//The class for information about people, parent class
class User
{
    public string $name;
    public string $surname;

    /**
     * The constructor method for the class
     *
     * @param string $name
     * @param string $surname
     */
    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}
