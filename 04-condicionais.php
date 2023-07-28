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
    <h1>Estrutura Condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <?php 
    $numero = 5;

    if($numero > 1){
        echo "<p>$numero é maior que 1</>";
    }

    // Sintaxe sem chaves (a condicional e saida de dados precisam estar na mesma linha)
    if($numero > 1) echo "<p>$numero é maior que 1</>";
    
    ?>
    

    <h2>Composta</h2>

    <?php 
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 10; // o que temos
    $qtdCritica = 15; // mínimo necessário

    echo "<h4>Produto: $produto</h4>";
    echo "<h4>Quantidade: $qtdEmEstoque</h4>";

    if ($qtdEmEstoque < $qtdCritica) {
        echo '<span class="comprar">É necessário comprar </span>';

        if ($qtdEmEstoque == 0) {
            echo '<span class="urgente">Urgente</span>';
            
        }

    } else {
        echo '<span class="normal" >Estoque normal</span>';
    }
    
    ?>



    <h2>Encadeada</h2>
    <?php 
    
    $opcaoEscolhida = 4;

    if ($opcaoEscolhida == 1) {
        echo "<p>Ok, vamos fazer o lanche</p>";
        
    }elseif($opcaoEscolhida == 2){
        echo "<p>Beleza, pizza no forno</p>";

    }elseif ($opcaoEscolhida == 3){
        echo "<p>Professor ficou feliz!</p>";
    }else {
        echo "<p>Não entendi... Vou chamar a Valeska</p>";
    }
    

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