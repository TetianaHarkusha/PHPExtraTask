<?php

declare(strict_types=1);

namespace Task11;

use Exception;
use Task11\Item;

/*
The class for working with directory.
The children class from abstract class Item
*/
class Directory extends Item
{
    public function __construct(string $name)
    {
        if (!is_dir($name)) {
            throw new Exception('The directory with that name does not exist');
        }
        parent::__construct($name);
    }
}
