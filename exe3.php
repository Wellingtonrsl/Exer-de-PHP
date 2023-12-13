<?php
//Exercicio 3

//Crie um programa que gera automaticamente os dados de uma pessoa e insere essas informações em um array, após inserir no array.

// O programa deve analisar quantas pessoas são do genero Masculino, quantas pessoas do genero masculino tem idade acima de 20 anos e quantos deles tem mais de 50 anos, no final deve ser feito um relatorio com a analise feita desses dados e imprimir na tela.

// obs: a quantidade de pessoas gerada automaticamente é por criterio de vocês pode ser 5, 10, ou 30, fica a criterio de vocês;
// Uma Dica Usem a função do php rand(min, max) para gerar os dados automaticamente e adicionar no array de pessoas


//
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>"Tabela dinâmica com PHP Foreach"</title>
</head>

<body>
    <table border="1">
        <?php 
       
       // dados de uma pessoa e insere essas informações em um array,
       $tabela = array(
          array("Nome","Genero","Idade"),
          array("Rafael","Masculino","51"),
          array("Lucas","Masculino","60"),
          array("Maria","Feminino","21"),
          array("Duda","Feminino","55"),
          array("Elen","Feminino","30"),
        );  
        
        //imprime os dados da tabela
        foreach ($tabela as $key => $value) {
          echo "<tr>";
           foreach ($tabela[$key] as $cedula){
              echo "<td>".$cedula."</td>";
           };
           echo "</tr>";
      };
    //Quantos são do genero masculino
    //idade acima de 20
    //quantos deles tem mais de 50 anos

    $dbPessoas = [];
$lenArr = count($tabela); // tamanho do array 5


function geradorNumeroAleatorio(int $final): int{
    $number = 0;
    for($j=1; $j <=8; $j++) {
        $number = rand(0, $final-1);
    }
    return $number;
}

    $pessoa = ['nome' =>'', 'genero' => '','idade' => 0, 'profissao' => ''];
    
    // preenche os dados no array de pessoas
    $pessoa['idade'] = $listIdades[geradorNumeroAleatorio($lenArr)];
    $pessoa['profissao'] = $listProfissao[geradorNumeroAleatorio($lenArr)];
    $pessoa['genero'] = $listGenero[$sorteaGenero];
  
    // escolha o nome da pessoa pelo genero
    switch($listGenero[$sorteaGenero]){
        case 'M':
            $pessoa['nome'] = $listNomesM[geradorNumeroAleatorio($lenArr)];
            break;
        case 'F':
            $pessoa['nome'] = $listNomesF[geradorNumeroAleatorio($lenArr)];
            break;
    }

    // registra uma pessoa gerada automaticamente no array de pessoas
    $dbPessoas[] = $pessoa;    

    //
    $pessoaComIdadeMaior20 = 0;
    $pessoaComIdadeMaior50 = 0;
    $generoM = 0;
    $pessoasGerada = [];
    
    foreach($dbPessoas as $p) {
        if($p['genero'] != 'M') {
            continue;
        }
    
        if($p['idade'] > 20  && $p['idade'] < 49){
            $pessoaComIdadeMaior20++;
        }
    
        if($p['idade'] > 50){
            $pessoaComIdadeMaior50++;
        }
    
        $generoM++;
        $arrPessoaComIdadeMaior20[] = $p;
    }
    
    echo "Foram registradas  {$totalGerador} dessas pessoas {$generoM} são do genero Masculino, {$pessoaComIdadeMaior20} possui idade acima de 20 anos e {$pessoaComIdadeMaior50} tem idade acima de 50 anos<br>";
    
    //echo "<br>Lista de Pessoas<br>"; var_dump($arrPessoaComIdadeMaior20);

 foreach ($arrPessoaComIdadeMaior20 as $p) {

    $str = '';
    $str .= "<div class='pessoa'>
    <span class='nome'>".$p['nome']."</span>
    <span class='genero'>".$p['genero']."</span>
    <span class='idade'>".$p['idade']."</span>
     <span class='profissao'>".$p['profissao']."</div>
    </div>";

    echo $str;
 }


 echo '<style>.pessoa{width: 400px; height: 20px; border: 1px solid #000} span{ display: inline-block; text-align: center; min-width:80px; border-left: 1px solid  #000 }</style>';

    ?>
    </table>

</body>

</html>

