<?php

declare(strict_types=1);

namespace Task14;

//The class for information about employees, children class
class Employee extends User
{
    public float $salary;

    /**
     * The constructor method for the class,
     * uses the constructor method of parent class
     *
     * @param string $name
     * @param string $surname
     * @param float $salary
     */
    public function __construct(string $name, string $surname, float $salary)
    {
        parent::__construct($name, $surname);
        $this->salary = $salary;
    }
}
