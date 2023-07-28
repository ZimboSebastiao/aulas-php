<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
    <style>
        .urgente {
            color: red;
            font-weight: bold;
        }

        .normal {color: green;}
        .comprar {color: red;}

    </style>
</head>
<body>
    <h1>(Versão 2) Estrutura Condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <?php 
    $numero = 5;

    if($numero > 1){
    ?>

        <p><?=$numero?> é maior que 1</p>
    
    <?php
    }

    // Sintaxe sem chaves (a condicional e saida de dados precisam estar na mesma linha)
    if($numero > 1) echo "<p>$numero é maior que 1</>";
    
    ?>

    <hr>


    <h2>Composta</h2>

    <?php 
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0; // o que temos
    $qtdCritica = 15; // mínimo necessário
    ?>

    <h4>Produto: <?=$produto?></h4>
    <h4>Quantidade: <?=$qtdEmEstoque?></h4>

    <?php
    if ($qtdEmEstoque < $qtdCritica) {
    ?>
       <span class="comprar">É necessário comprar </span>

    <?php
    
        if ($qtdEmEstoque == 0) {
    ?> 
        <span class="urgente">Urgente</span>

    <?php
        }
    
    } else {
    ?>
        <span class="normal" >Estoque normal</span>
    <?php
    }
    ?>

    <hr>


    <h2>Encadeada</h2>
    <?php 
    
    $opcaoEscolhida = 3;

    if ($opcaoEscolhida == 1) {
        $mensagem = "Ok, vamos fazer o lanche";
   
    }elseif($opcaoEscolhida == 2){
        $mensagem = "Beleza, pizza no forno";

    }elseif ($opcaoEscolhida == 3){
        $mensagem = "Professor ficou feliz!";

    }else {
        $mensagem = "Não entendi... Vou chamar a Valeska";
    }

    // Versão Usando switch/case

    switch ($opcaoEscolhida) {
        case 1:  
            $mensagem = "Ok, vamos fazer o lanche";
            break;

        case 2:  
            $mensagem = "Beleza, pizza no forno";
            break;

        case 3:  
            $mensagem = "Professor ficou feliz!";
            break;
        
        default:
            $mensagem = "Não entendi... Vou chamar a Valeska";
            break;
    }










    ?>

    <?php
    $a = "10";
    $b = 10;
    $resultado = $b == $a;

    ?>

<pre>
<?= 
var_dump($resultado);
var_dump($a);
var_dump($b);
?> 
</pre>


</body>
</html>