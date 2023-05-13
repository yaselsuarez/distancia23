<?php
/**
 * Script para realizar operaciones matemáticas.
 *
 * Este script contiene dos funciones: sumar y restar.
 * El autor es Yasel Suárez.
 * La versión es 2.0.
 *
 * @package distancia23
 * @subpackage scripts
 * @version 2.0
 * @author Yasel Suárez
 */

/**
 * Función para sumar dos números.
 *
 * @param float $a Primer número a sumar.
 * @param float $b Segundo número a sumar.
 * @return float El resultado de la suma.
 * @version 1.0
 */
function sumar($a, $b){
    return $a + $b;
}

/**
 * Función para restar dos números.
 *
 * @param float $a Número al que se restará otro.
 * @param float $b Número a restar.
 * @return float El resultado de la resta.
 * @version 1.0
 */
function restar($a, $b){
    return $a - $b;
}

// Ejemplo de uso
$resultadoSuma = sumar(2, 3);
$resultadoResta = restar(5, 2);
echo "El resultado de la suma es: $resultadoSuma\n";
echo "El resultado de la resta es: $resultadoResta\n";

?>
