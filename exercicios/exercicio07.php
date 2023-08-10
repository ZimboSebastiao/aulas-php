<?php

    // ARRAY 
    $fabricantes = ["Samsung", "Lenovo", "Tecno", "Dell"];

    // Sanatização
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricante = filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $disponibilidade = filter_input(INPUT_POST, "disponibilidade", FILTER_SANITIZE_SPECIAL_CHARS);
    $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);


    // Condicional para verificar se o método é Post, e fazer a tratativa de erro
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if( empty($_POST["nome"]) || empty($_POST["preco"])){
        
?>
            
            <p style="color: red;">Voce deve preencher, os campos Nome e Preço.</p>
            <p><a href="exercicio-html07.php">Voltar</a></p>
<?php
        }   
    }     
?>