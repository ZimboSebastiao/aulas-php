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
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];
        

        
        $interesses = isset($_POST["interesses"]) ? $_POST["interesses"] : [];

        $idade = $_POST["idade"];
    ?>
    <h2>Dados:</h2>
    <ul>
        <li>Nome: <?=$nome?></li>
        <li>E-mail: <?=$email?></li>
        <li>Idade: <?=$idade?></li>
        <li>Interesses: <?= implode(", ", $interesses)?></li>

        <!-- Se a variavel $mensagem não estiver vazia, mostre o <li> com a mensagem -->
        <?php if(!empty($mensagem)){?>
        <li>Mensagem: <?=$mensagem?></li>
        <?php }?>
    </ul>
<?php 
}
?>
</body>
</html>

