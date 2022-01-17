<?php

/**
 * User: kaiopiola
 * Date: 17/12/2022 
 */

namespace Kaiopiola\Keygen;

abstract class Settings
{
    /**
     * Set pattern format
     * @param string $pattern String of allowed format i.e. XXXX-NNNN-LLLL
     * @return void
     **/
    public function pattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * Set allowed numbers
     * @param string $numbers String of allowed numbers i.e. 123456
     * @return void
     **/
    public function numbers($numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * Set allowed letters
     * @param string $letters String of allowed letters i.e. ABCDE
     * @return void
     **/
    public function letters($letters)
    {
        $this->letters = $letters;
    }
}