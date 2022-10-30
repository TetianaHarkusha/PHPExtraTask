<?php

declare(strict_types=1);

namespace Task11;

abstract class Tree
{
    public string $name; // a directory or a file name
    protected string $date; // a file creation date
    //protected Directory $parentDir; // a reference to parent directory

    public function __construct(string $name, string $date)
    {
        $this->name = $name;
        $this->date = $date;
    }
}