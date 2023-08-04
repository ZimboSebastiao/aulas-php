<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Funções</title>
    <style>
        body {background-color: lavender;}
        .reprovado {
            color: red;
            font-weight: bold;
        }

        .aprovado {
            color: green;
            font-weight: bold;
        }
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
            padding: 1.7rem;
            font-size: 1.7rem;
            font-weight: bold;
        }


        td {
            padding: 10px;
            font-size: 1.3rem;
        }

        td:first-child { text-transform: uppercase;}

        td:nth-child(2) { text-align: center;}

        td:last-child {
            font-size: bold;
            text-align: right;
        }

        
        tr { background-color: lightskyblue;}

        
        tr:hover, tr:focus {
            cursor: pointer;
            background-color: aquamarine;
        }
        
    </style>
</head>
<body>
    
    <h1>Verificação da situação do aluno</h1>
    <?php 
       
        // Função 1: Calcular o valor da Média
        function notas(float $n1, float $n2):float{
            $media = ($n1 + $n2) / 2;
            return $media;
        }

        // Chamando e guardando o retorno
        $verificacao = notas(10, 6.5);


        // Função 2: Calcular o valor da Média
        function resultado(float $verificacao):string{
            if ($verificacao > 7 ) {
                    return "<span class='aprovado'>Aprovado</span>";
                }
                return "<span class='reprovado'>Reprovado</span>";
        }
        
    ?>

    <table>
        <tr>
            <th>Média</th>
            <th>Situação</th>
        </tr>

        <tr>
            <td><?=$verificacao?></td>
            <td><?=resultado($verificacao)?></td>
        </tr>
    </table>






</body>
</html>