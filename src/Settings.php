<?php

/**
 * @author Kaiopiola <github.com/kaiopiola>
 * @package Kaiopiola\Keygen
 * 
 * This file is part of the Kaiopiola\Keygen package.
 * 
 * (c) Kaio Piola 2022 <contact@kaiopiola.dev>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Kaiopiola\Keygen;

abstract class Settings
{
    /**
     * Set pattern format
     * @param string $pattern String of allowed format i.e. XXXX-NNNN-LLLL
     * @return void
     **/
    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * Set allowed numbers
     * @param string $numbers String of allowed numbers i.e. 123456
     * @return void
     **/
    public function setNumbers($numbers)
    {
        $this->numbers = $numbers;
    }

    /**
     * Set allowed letters
     * @param string $letters String of allowed letters i.e. ABCDE
     * @return void
     **/
    public function setLetters($letters)
    {
        $this->letters = $letters;
    }

    /**
     * Set existing keys to avoid duplicates
     * @param array $existing_keys Array of existing keys
     * @return void
     */
    public function setExistingKeys($existing_keys)
    {
        $this->existing_keys = $existing_keys;
    }
}
