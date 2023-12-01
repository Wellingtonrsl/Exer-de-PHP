<?php

//Exercicio 1
//Desenvolva um programa PHP, que executa uma contagem entre 0 e 100 e conta quais números são pares e quantos números são imapres, no final o programa deve imprimir na tela o resultado.


$number = 0;
$par = 0;
$impar = 0;


for($number = 1; $number <= 100; $number ++){

  if($number % 2 == 0){
      echo "<div>".$number."</div>";
      $par++;
  }
  if($number % 2!= 0){
  echo "<div>".$number."</div>";
    $impar++;
}

$number++;
     
 }
 echo "<br> Entre 0 e 100 existem $par numeros pares.<br/>";
 echo "<br> Entre 0 e 100 existem $impar numeros impares.<br>";


  