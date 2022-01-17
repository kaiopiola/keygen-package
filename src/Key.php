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
                    // $randstring .= $characters[rand(0, strlen($characters) - 1)];
                    $generated_key .= $pattern[$x];
                    break;
            }
        }
        return $generated_key;
    }
}
