<?php
// Exercicios 5

    // Crie um programa que recebe um valor inteiro negativo e realiza a contagem do valor passado até 0.

    // Exemplo:

    // $numero_aleatorio = -5;
    // saída: -5, -4, -3, -2, -1, 0,

    $number = -5;
    do {
    echo "<p>Total: $number</p>";
    $number = $number + 1;
    }
    while($number <= 0); 
