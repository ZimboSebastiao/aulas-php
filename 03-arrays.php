<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando Arrays</title>
    <style>
        ul li:nth-child(even) {color: red;}
        ul li:nth-child(odd) {color: blue;}
    </style>
</head>
<body>
    <h1>Trabalhando com arrays (vetores e matrizes)</h1>
    <hr>


    <?php
        // Vetores
        // Sintaxe com colchetes
        $bandas = ["Savatage", "Dio", "Rush"];

        // sintaxe com função array()
        $cursos = array("HTML", "Node", "PHP");

        // Sintaxe de atribuição manual
        $buteco[0] = "Bolinho de bacalhau";
        $buteco[1] = "Pastel";
        $buteco[2] = "Esfiha";

        // Constantes com array (PHP 7+)
        define("UNIDADE", ["Penha", "Tatuapé"]);
        const FRUTAS = ["Morangos", "Abacaxi"];
    ?>
    <h2>Vetores - Arrays com índice númerico </h2>
    <h3>Acessando os dados do Array (Vetores)</h3>
    <!-- Para acessar o indice de um vetor, utilizamos colchetes [] -->
    <ol>
        <li>Banda que mais gosto: <?=$bandas[2]?></li>
        <li>Curso básico de: <?=$cursos[0]?></li>
        <li>Quero comer: <?=$buteco[1]?></li>
        <li>Estamos no Senac: <?=UNIDADE[0]?></li>
        <li>Fruta boa para caipirinha/vitamina: <?=FRUTAS[0]?></li>
    </ol>
    <hr>

    <h2>Array associativo</h2>

    <?php 
    
        $curso = [
            // chave associativa
            // identificador => valor

            "titulo" => "Gastronomia", "ghg",
            "carga_horaria" => 150,
            "descritivo" => "Aprenda a ferver água"
        ];
    ?>

    <h3>Acessando os dados (array associativo)</h3>
    <p>Nome do curso: <?=$curso["titulo"]?></p>
    <p>Nome do curso: <?=$curso["carga_horaria"]?>horas.</p>
    <p>Nome do curso: <?=$curso["descritivo"]?></p>
    <hr>

    <h2>Matriz - array dentro de array</h2>

    <?php 
    
        $plano_de_estudo = [
            ["JS Avançado", "Node.js", "React"], // 1 - lista
            ["PHP", "POO", "MySQL", "Python"],  //  2 - lista
            ["Teoria das Cores", "Photoshop", "UX/UI"] //  3 - lista
        ];
    
    ?>

    <ul>
        <li><?=$plano_de_estudo[0][2]?></li>
        <li><?=$plano_de_estudo[1][2]?></li>
        <li><?=$plano_de_estudo[2][1]?></li>
        <li><?=$plano_de_estudo[2][0]?></li>
        
    </ul>
    <hr>

    <h2>Funções de analise de estruturas de dados (debug/depuração)</h2>

    <h3>print_r()</h3>

    <pre>
    <?=print_r($bandas);?>
    </pre>



    <h3>var_dump()</h3>

    <pre>
    <?=var_dump($bandas);?>
    </pre>

    <h4>Array dentro de array</h4>
    <pre>
    <?=var_dump($plano_de_estudo);?>
    </pre>



</body>
</html>