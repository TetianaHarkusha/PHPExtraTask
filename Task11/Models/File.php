<?php

declare(strict_types=1);

namespace Task11;

use Exception;
use Task11\Item;

/*
The class for working with files.
The children class from abstract class Item
*/
class File extends Item
{
    public function __construct(string $name)
    {
        if (!is_file($name)) {
            throw new Exception('The file with that name does not exist');
        }
        parent::__construct($name);
    }
}
