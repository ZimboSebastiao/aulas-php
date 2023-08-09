<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando POST</h1>
    <hr>
    <p>Receber e processar, dados via <b>POST</b></p>

    <?php

        if( empty($_POST["nome"]) || empty($_POST["email"])){
    ?>
        <p style="color: red;">Voce deve preencher, os campos nome e email.</p>
        <p><a href="10-formulario.html">Voltar</a></p>
    <?php
        } else {
            // Capturando os dados transmitidos
            // $nome = filter_var($_POST["nome"], FILTER_SANITIZE_SPECIAL_CHARS);
            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
            $mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);


        // Solução usando ternário
        // $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];
        
        // Solução usando Operador de Coalescência: ??
        //(Disponível a partir da versão 7 do PHP)

        // $interesses = $_POST["interesses"] ?? [];
        $interesses = filter_var_array($_POST["interesses"] ?? [], FILTER_SANITIZE_SPECIAL_CHARS);


    ?>
    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
       

        <?php if(!empty($interesses)){?>
        <li>Interesses: <?= implode(", ", $interesses)?></li>


        <!-- Versão 2: acessando cada interesse existente no array usando loop -->
        <li>Interesses: 
            <ul>
                <?php foreach ($interesses as $interesse) {?>
                <li><?=$interesse?></li> 
                <?php }?>
            </ul>
        </li>
        <?php }?>

        <!-- Se a variavel $mensagem não estiver vazia, mostre o <li> com a mensagem -->
        <?php if(!empty($mensagem)){ ?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php }?>
    </ul>
<?php 
}
?>
</body>
</html>

