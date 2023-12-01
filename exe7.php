<?php
//Exercício 7

//João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho.

//Toda vez que ele trouxer um peso de peixes maior que o previsto pelo regulamento de pesca do estado de São Paulo (50 quilos) deverá pagar uma multa de R$ 4,00 por quilo excedente.

//João precisa que você faça um script que leia a variável peso (peso de peixes) e calcule o excesso.

//Gravar na variável excesso a quantidade de quilos além do limite e na multa variável o valor da multa que João deverá pagar.

//Imprima os dados do script com as mensagens apropriadas.
 
$peso = 60;
$multa = 4.00;
$pesolimite = 50;


echo ("Olá Seu João! Quantos quilos de peixe o senhor pescou hoje?\n");
sscanf("%f",$peso); 

if ($peso>$pesolimite){
$excesso = $peso - $pesolimite;
$multa = $excesso * 4.00;
echo "\nVai precisar pagar multa Seu João!! O valor da multa é de R$ %.2f\n";
} else{
	echo "\nNão é necessário pagar multa Seu João! O peixe pesa apenas %.2f kg!\n";
}

return 0;

?>