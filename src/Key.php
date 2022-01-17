<?php

/**
 * User: Kaio Piola
 * Date: 01/12/2022 
 */

namespace Kaiopiola\Keygen;

abstract class Settings
{
    /**
     * Define o padrão de chave utilizado
     * Exemplo: LLLL-NNNN-XXXX
     * 
     * L representa as Letras
     * N representa os Números
     * X representa qualquer um dos dois tipos
     * 
     * Qualquer outro caractere (Como traços, pontos, etc) não
     * sofrerá alteração no momento da geração, mantendo seu valor original.
     * 
     * Se não definido, será utilizado o seguinte: XXXXX-XXXXX-XXXXX
     * 
     * @return string
     */
    public function pattern($s)
    {
        return $this->pattern = $s;
    }

    /**
     * Define quais números poderão ser utilizados no momento da geração.
     * 
     * Se não definido, será utilizado o seguinte: 0123456789
     * 
     * @return string
     */
    public function numbers($s)
    {
        return $this->numbers = $s;
    }

    /**
     * Define quais letras poderão ser utilizadas no momento da geração, mantendo
     * sua capitalização.
     * 
     * Se não definido, será utilizado o seguinte: ABCDEFGHIJKLMNOPQRSTUVWXYZ
     * 
     * @return string
     */
    public function letters($s)
    {
        return $this->letters = $s;
    }
}

class Key extends Settings
{
    /**
     * Output key
     *
     * @var
     */
    protected $generated_key;
    protected $numbers = '0123456789';
    protected $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    protected $pattern = 'XXXXX-XXXXX-XXXXX';

    public function generate()
    {
        // NNNNN-NNNNN-NNNNN - Pattern padrão
        // $this->pattern; //Trabalhar o pattern com essa variavel
        $numbers = $this->numbers;
        $letters = $this->letters;
        $characters = $numbers . $letters;

        $pattern = $this->pattern; //Valida existencia da property pattern
        $divide_pattern = explode('-', $pattern);

        $generated_key = "";
        for ($i = 0; $i < count($divide_pattern); $i++) {
            $randstring = "";
            for ($x = 0; $x < strlen($divide_pattern[$i]); $x++) {
                switch ($divide_pattern[$i][$x]) {
                    case "N":
                        $randstring .= $numbers[rand(0, strlen($numbers) - 1)];
                        break;
                    case "L":
                        $randstring .= $letters[rand(0, strlen($letters) - 1)];
                        break;
                    case "X":
                        $randstring .= $characters[rand(0, strlen($characters) - 1)];
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
