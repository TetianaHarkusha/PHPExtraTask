<?php

declare(strict_types=1);

namespace Task14;

use Task14\PrintCollection;

//The class for working with a collection of users, employees and cities
class ObjectsCollection
{
    private $arr = []; //the array of users, employees and cities

    /**
     * Adds an object to the array (collection of users, employees and cities).
     *
     * @param User|Employee|City $obj The object of class User, Employee or City
     */
    public function add(User|Employee|City $obj)
    {
        if (!in_array($obj, $this->arr)) {
            $this->arr[] = $obj;
        }
    }

    /**
     * Returns the array of users, employees or cities
     *
     * @return array
     */
    public function get(): array
    {
        return $this->arr;
    }

    /**
     * Gets the string with objects names of class Users or its children class
     *
     * @return string
     */
    public function getUserNames(): string
    {
        $str = '';
        foreach ($this->arr as $obj) {
            if ($obj instanceof User) {
                $str .= $obj->name . ' <br>';
            }
        }
        return $str;
    }

    /**
     * Gets the string with objects names that are not in class User
     *
     * @return string
     */
    public function getNotUserNames(): string
    {
        $str = '';
        foreach ($this->arr as $obj) {
            if (!($obj instanceof User)) {
                $str .= $obj->name . ' <br>';
            }
        }
        return $str;
    }

    /**
     * Gets the string with objects names of class Users not its children class
     *
     * @return string
     */
    public function getOnlyUserNames(): string
    {
        $str = '';
        foreach ($this->arr as $obj) {
            if (get_class($obj) == __NAMESPACE__ . '\\' .'User') {
                $str .=  $obj->name . ' <br>';
            }
        }
        return $str;
    }
}
