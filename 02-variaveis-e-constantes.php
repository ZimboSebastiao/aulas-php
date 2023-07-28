<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1> Manipulando dados na memória</h1>
    <hr>

    <?php
        // string
        $curso = "Téc. em Informática para Internet";

        // inteiro (integer)
        $ano = 2023;

        // float
        $preco = 2500.25;

        echo "<h2>Saída de dados usando echo na sintaxe COMPLETA</h2>";

        echo $curso;
        echo "<p>$curso</p>"; // interpolação (somente com aspas duplas)
        echo '<p>$curso</p>'; // vira uma string (errado)
        echo "<p>".$curso."</p>"; // concatenação

        echo "<p>Ano letivo: $ano</p>";
        echo "<p>Preço: $preco</p>";
    ?>
    <h2>Saída de dados usando sintaxe SIMPLIFICADA</h2>
    <p><?php echo $curso ?> </p>
    <p> <?=$curso?> </p>

    <p>Estamos fazendo o <?=$curso?> no ano de <?=$ano?>. </p>


    <?php 
        // Constantes

        // 1º forma: Usando a função define()
        define("MEU_NOME", "Zimbo");

        // 2ª forma: usando a palavra-chave const
        const UNIDADE = "Penha";
    
        // Saída de dados constantes
        echo UNIDADE;
        echo "<p><b>".MEU_NOME."</b></p>";
    ?>
    <!-- Saída Simplificada -->
    <h2>Saída SIMPLIFICADA</h2>
    <p>Me chamo <b><?=MEU_NOME?></b> e estou no Senac <?=UNIDADE?></p>

</body>
</html>