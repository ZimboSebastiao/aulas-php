<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Loop e Array</title>
    <style>
        body {background-color: lightyellow;}
        h1 {text-align: center;}
        table, th, td {
            border: solid 8px black;
            border-collapse: collapse;
        }

        table {
            margin: auto;
            width: 80%;
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

        tr:nth-child(even) { background-color: burlywood;}

        tr:nth-child(odd) { background-color: lightskyblue;}

        
        tr:hover, tr:focus {
            cursor: pointer;
            background-color: crimson;
        }


    </style>
</head>
<body>
    <h1>Exercício 04 - Loop e Array</h1>
    
    <?php 

        $linguagens = [

            "HTML" => "Estruturação",
            "CSS" => "Estilos",
            "JS" => "Comportamentos",
            "PHP" => "Back-End",
            "SQL" => "Manipulação de dados",
            "Java" => "Softwares" 

        ];
    ?>
       <table>
        <tr>
        <th>ID</th>
        <th>Linguagem</th>
        <th>Descrição</th>
        </tr>
    <?php
        $i = 1;
        
        
        foreach ($linguagens as $linguagem => $desc) {
    ?>
        <tr>
        <td><?=$i?></td>
        <td><?=$linguagem?></td>
        <td><?=$desc?></td>
        </tr>
    <?php
            $i++;
        }
    ?>
        </table>
</body>
</html>