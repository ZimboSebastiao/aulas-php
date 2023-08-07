<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Repetição</title>
</head>
<body>
    <h1>Estrutura de Controle de Repetição</h1>
    <hr>

    <h2>WHILE (enquanto)</h2>

    <?php 
    
        $i = 1;

        while($i <= 5){
    ?>
            <p><?= $i?></p>
    <?php
    
            $i++;
        }
    ?>
<hr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             

    <h2>DO/WHILE (repita/até)</h2>

    <?php 

        $j = 1;

        do {
    ?>
            <div>
            <h3>Título...</h3>
            <p>lorem ipsum dolor sit amet</p>
            </div>
    <?php 
            $j++;
        }while ($j <= 10);

    ?>
    <hr>


    <h2>FOR (para)</h2>

    <?php 

        for($k = 1; $k <=3; $k++){
    ?>
        <p><code>i</code> vale:<b> <?=$k?></b></p>
    <?php 

        }
    
    ?>
    <hr>




<!-- ======== Exercício ======== -->

    <?php 

        $ano = [

            "Janeiro", 
            "Fevereiro", 
            "Março", 
            "Abril", 
            "Maio", 
            "Junho", 
            "Julho", 
            "Agosto", 
            "Setembro", 
            "Outubro",
            "Novembro",
            "Dezembro" 
        ];
    ?>

        <ol>
    <?php
            for($i = 0; $i < 12; $i++){
    ?>
                <li><?=$ano[$i]?></li>
    <?php
            }
    ?>
        </ol>
    
    <hr>

    <?php 
    
        $alunos = [
            "Melissa", "Tanala", "Zimbo", "Eduardo", "Kaue"
        ];

        /* Guardamos em "cache" (memória) a quantidade de elementos, evitando assim a contagem a cada iteração do loop e melhorando a perfomance
        */
        $quantidade = count($alunos);

        for($i = 0; $i < $quantidade; $i++){
    ?>
            <p>Nome: <b><?=$alunos[$i]?></b></p>
    <?php
        }

    ?>

    <hr>

    <h2>FOREACH (para cada)</h2>
    <p>Útil e mais fácil, para lidar com <code>arrays</code>.</p>

    <ol>
        <?php foreach($ano as $mes){?> 
            <li> <?=$mes?> </li>
        <?php
        } ?>
        
    </ol>

<hr>


    <h3>Manipulando arrays associativos</h3>

    <?php 
    
        $clubes = [
            "Corinthians" => "Timão",
            "Palmeiras" => "Porco",
            "São Paulo" => "Tricolor",
            "Santos" => "Peixe"
        ];

        foreach ($clubes as $clube => $apelido) {
    ?>
        <p>O <?=$clube?> é conhecido como <?=$apelido?>.</p>
    <?php 
        }
    ?>
<hr>


    <h2>Loop com Matriz</h2>

    <?php 
    
        $plano_de_estudo = [

            ["HTML", "CSS", "JS"],
            ["React", "React Native"]

        ];
        
        // Usando for aninhado
        for ($linha = 0; $linha < count($plano_de_estudo); $linha++) { 
            for ($coluna = 0; $coluna < count($plano_de_estudo[$linha]); $coluna++) { 
    ?>
            <p><b> <?=$plano_de_estudo[$linha][$coluna]?></b></p>
    <?php
            }    
        }
    ?>

    <hr>

    <?php 

        // Usando Foreach aninhado
        foreach ($plano_de_estudo as $linha) {
            foreach ($linha as $coluna) {
    ?>
        <p><i><?=$coluna?></i></p>
    <?php
            }
  
        }
    
    ?>

    <hr>

    <h3>Loop com matriz associativa</h3>

    <?php 

        $clientes = [

        [
            "nome" => "Chaves",
            "idade" => 8,


        ],

        [
            "nome" => "Chapolin",
            "idade" => 25,


        ],

        [
            "nome" => "Chiquinha",
            "idade" => 10,


        ]
        
  

        ];

        foreach ($clientes as $cliente) {
    ?>
        <p>Nome: <?=$cliente["nome"]?></p>
        <p>Nome: <?=$cliente["idade"]?></p>
    <?php
        }
    
    ?>









    
</body>
</html>