<?php

/**
 * User: Kaio Piola
 * Date: 01/12/2022 
 */

namespace Kaiop\Keygen;

class Key
{
    /**
     * Output key
     *
     * @var
     */
    protected $generated_key;

    public function new()
    {
        // NNNNN-NNNNN-NNNNN
        $characters = '0123456789ABCDEFGHJKLMNPQRSTVWXYZ';
        $generated_key = "";
        for ($i = 0; $i < 3; $i++) {
            $randstring = "";
            for ($x = 0; $x < 5; $x++) {
                $randstring .= $characters[rand(0, strlen($characters) - 1)];
            }
            $i == 2 ? $generated_key .= $randstring : $generated_key .= $randstring . "-";
        }
        return $generated_key;
    }
}
