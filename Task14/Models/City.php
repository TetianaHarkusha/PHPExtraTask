<?php

declare(strict_types=1);

namespace Task14;

//The class for information about employees
class City
{
    public string $name;
    public int $population;

    /**
     * The constructor method for the class
     *
     * @param string $name
     * @param int $population
     */
    public function __construct(string $name, int $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}
