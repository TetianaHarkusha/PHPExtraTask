<?php

declare(strict_types=1);

namespace Task11;

// Abstract class for object filesystem
abstract class Item
{
    protected string $name; // a directory or a file name
    protected int $date; // a file/directory creation date

    /**
     * constructor method for the class
     *
     * @param $string $name
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
        return date('d.m.Y', $this->date);
    }
}
