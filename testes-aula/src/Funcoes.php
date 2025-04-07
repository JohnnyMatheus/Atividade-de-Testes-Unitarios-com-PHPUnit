<?php

class Funcoes{
    public static function isEven($n){
        return $n % 2  ===  0;
    }


/** Funcão calcular o fatorial
 * @param int $n fatorial do numero informado 
 * 
 * @return int se n for 0, retorna 1 (pois 0! = 1)
 *         Chamada recursiva: : $n * self::factorial($n - 1);
 *          Para n > 0, retorna n multiplicado pelo fatorial de n-1
*/


    public static function factorial($n){
        if($n < 0){
            throw new InvalidArgumentException("Negative number not allowed");//Numero negativo não permitido
        }  
        return $n === 0 ? 1 : $n* self::factorial($n - 1);

    }

/** Função verifica se uma string é um palíndromo
 * 
*/

    public static function isPalindrome($str) { 
        $str = strtolower(preg_replace('/[^a-z0-9]/i', '', $str));  
        return $str === strrev($str); 
    }

/**Função que converte de fahrenheit para Celsius
 * 
 */
    public static function fahrenheitToCelsius($f) { 
    return ($f - 32) * 5 / 9; 
    } 

    public static function calculateDiscount($price, $percent) { 
        if ($price < 0 || $percent < 0) { 
            throw new InvalidArgumentException("Negative values not allowed"); 
        } 
        return $price - ($price * $percent / 100); 
}

}




?>