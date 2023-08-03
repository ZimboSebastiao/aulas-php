<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Arrays</title>
    <style>
        body{
            background-color: beige;
            font-family: Verdana;
        }
        h1, h2 {text-align: center;}
        article  {
            display: flex;
            justify-content: space-around;
        }
        p {
            padding: 1px;
            margin: 5px; 
        }

        section {
            background-color: violet;
            border: solid 4px;
        }
        


    </style>
</head>
<body>
    
    <?php 

        $dados = [

            [
                "usuario" => "Melissa",
                "email" => "melissa@gmail.com",
                "senha" => "Me2023",
                "idade" => 21,
                "sexo" => "F"
        ],
            [
                "usuario" => "Eduardo",
                "email" => "eduardo@gmail.com",
                "senha" => "ed2023",
                "idade" => 18,
                "sexo" => "M"
            ]

        ];
    ?>
    <!-- <pre>
    <?=var_dump($dados)?>
    </pre> -->

    
    <h1>Dados de Usuários</h1>
    <hr>
    <article>
        <section>
            <h2>Usuário</h2>
            <p>Nome: <?=$dados[0]["usuario"]?></p>
            <p>E-mail: <?=$dados[0]["email"]?></p>
            <p>Idade: <?=$dados[0]["idade"]?></p>
            <p>Sexo: <?=$dados[0]["sexo"]?></p>
        </section>
        
        <section>
            <h2>Usuário</h2>
            <p>Nome: <?=$dados[1]["usuario"]?></p>
            <p>E-mail: <?=$dados[1]["email"]?></p>
            <p>Idade: <?=$dados[1]["idade"]?></p>
            <p>Sexo: <?=$dados[1]["sexo"]?></p>
        </section>
    </article>






</body>
</html>