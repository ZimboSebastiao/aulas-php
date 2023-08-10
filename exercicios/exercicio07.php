<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>

    <style>
        * {box-sizing: border-box;} 

        body {
            background-color: #6a6679 !important;
        }

        #limitador {
            width: 30vw !important;
            margin: auto !important;
        }

        a {text-decoration: none !important;}

        #span {text-align: center !important;}
        
    </style>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    
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
                
                <span class="btn btn-warning" id="span">Voce deve preencher, os campos <b>Nome</b> e <b>Preço</b>.</span>
                <!-- <p class="btn btn-light"><a href="exercicio-html07.php">Voltar</a></p> -->
    <?php
            }   else {
                echo "dados cadastrado";
            }
        }     
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
