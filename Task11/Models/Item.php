<?php

declare(strict_types=1);

namespace Task11;

abstract class Item
{
    protected string $name; // a directory or a file name
    protected string $date; // a file/directory creation date
    
    /**
     * constructor method for the class
     * 
     * @param $string $name
     * @param $string $int
     */
    public function __construct($name, $date)
    {
        $this->date = filectime($name);
    }

    /**
     * The method get for the property name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * The method get date the property name
     *
     * @return string
     */
    public function getDate(): string
    {
        return $this->name;
    }
}