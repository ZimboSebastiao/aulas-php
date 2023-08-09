<?php

    $fabricantes = ["Samsung", "Lenovo", "Tecno", "Dell"];


    if( !empty($_POST["nome"]) || !empty($_POST["preco"])){
?>
            
            <p style="color: red;">Voce deve preencher, os campos Nome e Preço.</p>
            <p><a href="exercicio-html07.php">Voltar</a></p>
<?php
    }       
?>