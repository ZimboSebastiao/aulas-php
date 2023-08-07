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

    


</body>
</html>