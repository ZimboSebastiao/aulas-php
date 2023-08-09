<?php

    $fabricantes = ["Samsung", "Lenovo", "Tecno", "Dell"];


    if( isset($_POST["nome"]) || isset($_POST["preco"])){
        $_POST = 0;
?>
            <p>teste</p>
            <!-- <p style="color: red;">Voce deve preencher, os campos Nome e Preço.</p>
            <p><a href="exercicio-html07.php">Voltar</a></p> -->
<?php
    }  
    if( empty($_POST["nome"]) || empty($_POST["preco"])){ ?>
        <p style="color: red;">Voce deve preencher, os campos Nome e Preço.</p>
            <p><a href="exercicio-html07.php">Voltar</a></p>
<?php 
    }
?>
