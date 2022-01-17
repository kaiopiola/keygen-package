<?php

/**
 * User: kaiopiola
 * Date: 01/12/2022 
 */

namespace Kaiopiola\Keygen;

use Kaiopiola\Keygen\Settings;

class Key extends Settings
{
    /**
     * Output key
     * @return string $generated_key
     */
    protected $generated_key;
    protected $numbers = '0123456789';
    protected $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected $pattern = 'XXXXX-XXXXX-XXXXX';

    public function generate()
    {
        mb_internal_encoding('UTF-8');
        // NNNNN-NNNNN-NNNNN - Pattern padrão
        // $this->pattern; //Trabalhar o pattern com essa variavel
        $numbers = $this->numbers;
        $letters = $this->letters;
        $characters = $numbers . $letters;

        $pattern = $this->pattern;
        $divide_pattern = explode('-', $pattern);

        $generated_key = "";
        for ($i = 0; $i < count($divide_pattern); $i++) {
            $randstring = "";
            for ($x = 0; $x < mb_strlen($divide_pattern[$i]); $x++) {
                switch ($divide_pattern[$i][$x]) {
                    case "N":
                        $randstring .= $numbers[rand(0, mb_strlen($numbers) - 1)];
                        break;
                    case "L":
                        $randstring .= $letters[rand(0, mb_strlen($letters) - 1)];
                        break;
                    case "X":
                        $randstring .= $characters[rand(0, mb_strlen($characters) - 1)];
                        break;
                    default:
                        // $randstring .= $characters[rand(0, strlen($characters) - 1)];
                        $randstring .= $divide_pattern[$i][$x];
                        break;
                }
            }
            $i == count($divide_pattern) - 1 ? $generated_key .= $randstring : $generated_key .= $randstring . "-";
        }
        return $generated_key;
    }
}
