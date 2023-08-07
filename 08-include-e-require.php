<?php 
// Fazendo a inclusão de um arquivo de recursos
include "recursos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modularização e Inclusão de Recursos</title>
</head>
<body>
    <h1>Modularização e Inclusão de Recursos</h1>
    <hr>

    <h2> <?=ESCOLA?></h2>
    <p>Estamos fazendo o curso de <?=$curso?></p>

    <!-- ======= Acesso com Loop =======-->
    <h2>Acesso com Loop</h2>
    <ul>
    <?php 
    // echo var_dump($tecnologias);
    foreach($tecnologias as $tec){
    ?>
        <li><?=$tec?></li> 
    <?php
    }
    ?>
    </ul>

    <!-- ======= Acesso Básico sem Loop =======-->
    <h2>Acesso sem Loop</h2>
    <ul>
        <li><?=$tecnologias[0]?></li>
        <li><?=$tecnologias[1]?></li>
        <li><?=$tecnologias[2]?></li>
        <li><?=$tecnologias[3]?></li>
    </ul>

    <hr>

    <article>
        <h2>Título qulquer</h2>
        <?php include "texto.php"?>
    </article>

    <!-- 
        include OU require 

        A diferença entre eles é na forma como lidam no caso de acontecer algum erro na inclusão.

        Erros de carregamento com include. dão aletas (warnings) mas NÃO PARA completamente a aplicação;

        Erros de carregamento com require, dão erro fatal (fatal error). e PARA complentamente a aplicação.
    -->


</body>
</html>