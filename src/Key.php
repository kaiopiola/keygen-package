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

use Exception as GlobalException;
use Kaiopiola\Keygen\Settings;

class Key extends Settings
{
    /**
     * Output key
     * @return string $generated_key
     */
    protected $numbers = '0123456789';
    protected $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected $pattern = 'XXXXX-XXXXX-XXXXX';
    protected $existing_keys = [];

    public function generate()
    {
        mb_internal_encoding('UTF-8');

        $numbers = $this->numbers;
        $letters = $this->letters;
        $characters = $numbers . $letters;
        $pattern = $this->pattern;

        $generated_key = "";
        for ($x = 0; $x < mb_strlen($pattern); $x++) {
            switch ($pattern[$x]) {
                case "N":
                    $generated_key .= $numbers[rand(0, mb_strlen($numbers) - 1)];
                    break;
                case "L":
                    $generated_key .= $letters[rand(0, mb_strlen($letters) - 1)];
                    break;
                case "X":
                    $generated_key .= $characters[rand(0, mb_strlen($characters) - 1)];
                    break;
                default:
                    $generated_key .= $pattern[$x];
                    break;
            }
        }
        return $generated_key;
    }

    public function generateUnique()
    {
        $existing_keys = $this->existing_keys;
        $generated_key = $this->generate();
        $keys_list = [];
        while (in_array($generated_key, $existing_keys)) {
            $generated_key = $this->generate();
            array_push($keys_list, $generated_key);
            if (self::compareKeys($existing_keys, $keys_list)) {
                throw new GlobalException('No more keys available', 406);
            }
        }
        return $generated_key;
    }

    public function compareKeys($existing_keys, $keys_list)
    {
        $compare1 = array_diff($existing_keys, $keys_list);
        $compare2 = array_diff($keys_list, $existing_keys);
        if (sizeof($compare1) == 0 && sizeof($compare2) == 0) {
            return true;
        } else {
            return false;
        }
    }
}
