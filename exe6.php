<?php
//Exercícios 6

        //Crie um algoritmo que dado um número aleatório realizando uma contagem progressiva ou regressiva

        //exemplo:

        //$numero_aleatório = 13;
        //saída: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13,
        //$numero_aleatório = -5;
       // saída: -5, -4, -3, -2, -1, 0,

        echo "Contagem Progressiva <br> <br>";
        
        for($cont=0;$cont<10;$cont++){ 
            echo "A variável \$cont vale $cont <br>" ; 
        }
            echo "<br> Contagem Regressiva <br> <br>" ; 
            
            for($cont=13;$cont>0;$cont--){
            echo "A variável \$cont vale $cont <br>";

            }

