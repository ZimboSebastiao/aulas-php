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

        .limitador {
            width: 30vw !important;
            margin: auto !important;
        }

        a {text-decoration: none !important;}

        .estilo {
                text-align: center !important;
                margin: 60px !important;
                
            }
        .estilo2 {
                /* text-align: center !important; */
                margin: 200px !important;
                
            }

        table, th, td {
            border: solid 8px black;
            border-collapse: collapse;
        }

        table {
            margin: auto;
            width: 90%;
            max-width: 600px;
        }

        caption {
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1.2rem;
            padding-bottom: 0.5rem;
        }

        th {
            background-color: black;
            color: white;
            padding: 1rem;
            font-size: 1.1rem;
        }


        td {
            padding: 10px;
            font-size: 1rem;
        }

        td:first-child { text-transform: uppercase;}

        td:nth-child(2) { text-align: center;}

        td:last-child {
            font-size: bold;
            text-align: right;
        }

        tr:nth-child(even) { background-color: aqua;}

        tr:nth-child(odd) { background-color: lightblue;}

        
        tr, td:hover, tr, td:focus {
            cursor: pointer;
            background-color: cornflowerblue;
        }

        
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
                <div class="limitador">

                    <span class="btn btn-danger estilo">Voce deve preencher, os campos <b>Nome</b> e <b>Preço</b>.</span>
                    <br>
                    <span class="btn btn-light estilo2"><a href="exercicio-html07.php">Voltar</a></span>
                </div>
    <?php
            }   else { ?>
                <table>
                <tr>
                    <th>Nome</th>
                    <th>Fabricante</th>
                    <th>Preço</th>
                    <th>Disponibilidade</th>
                    <th>Descrição</th>
                </tr>
        
                <tr>
                    <td><?=$nome?></td>
                    <td><?=$fabricante?></td>
                    <td><?=$preco?></td>
                    <td><?=$disponibilidade?></td>
                    <td><?=$descricao?></td>
                </tr>
            </table>
    <?php
            }
        } 
        
        
    ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

