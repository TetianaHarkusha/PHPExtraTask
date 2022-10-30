<?php

declare(strict_types=1);

namespace Task10;

//The class with the set of methods for working with string arrays
class StringHelper
{
    private string $str;

    /**
     * The constructor method for the class StringHelper
     *
     * @param string $str
     */
    public function __construct(string $str)
    {
        $this->str = $str;
    }

    /**
     * Make a string property uppercase
     *
     * @return string The string uppercase
     */
    public function toUpper(): string
    {
        return strtoupper($this->str);
    }

    /**
     * Make a string property lowercase
     *
     * @return string The string lowercase
     */
    public function toLower(): string
    {
        return strtolower($this->str);
    }

    /**
     * Checks if a string property starts with a given substring
     *
     * @param string $strStarts The given substring
     * @return bool
     */
    public function startsWith(string $strStarts): bool
    {
        return str_starts_with($this->str, $strStarts);
    }

    /**
     * Checks if a string property ends with a given substring
     *
     * @param string $strEnds The given substring
     * @return bool
     */
    public function endWith(string $strEnds): bool
    {
        return str_ends_with($this->str, $strEnds);
    }
}
