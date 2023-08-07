<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas</title>
</head>
<body>
    <h1>Exemplos de Funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>
    <?php 
    // Função que remove espaços antes e depois de strings

    $nome = "      Vinicius, e deve 80 paçocas       ";
    $nomeSemEspaco = trim($nome)
    ?>
    <pre><?=var_dump($nome)?></pre>
    <pre><?=var_dump($nomeSemEspaco)?></pre>

    <h3>str_replace()</h3>
    <!-- Função que permite a substituição de strings/caractere -->

    <?php
    $fraseFeia = "Fulano é um bobão e xarope";

    $fraseBunitinha = str_replace(
        ["xarope", "bobão"], 
        ["🤬", "💩"],
        $fraseFeia
        
        )
    ?>
    <p><?=$fraseFeia?></p>
    <p><?=$fraseBunitinha?></p>

    <h3>explode</h3>
    <?php 
    // Função que transforma uma string em um array

    $linguagens = "HTML - CSS - JS - PHP";
    $arrayLinguagens = explode(" - ", $linguagens);
    ?>

    <pre><?=var_dump($linguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>

    <hr>
    <h2>Númericas</h2>
    <h2>min, max, round</h2>
    <?php 
    $valores = [10, 5, 50, 1000, 275];
    $valorQualquer = 1090.90;
    ?>
    <p>Menor valor: <?=min($valores)?></p>
    <p>Meaiorr valor: <?=max($valores)?></p>
    <p>Arrendondamneto: <?=round($valorQualquer)?></p>

    <hr>
    <h2>Arrays</h2>
    <h3>implode()</h3>
    <?php
    // Função que transforma array em string

    $bandas = ["Rush", "Slayer", "Dio"];
    $textoBandas = implode(" - ", $bandas);
    ?>
    <pre><?=var_dump($bandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>
    
    <h3>extract()</h3>
    <?php 
    // Função que estrai chaves associativas para variáveis

    $aluno = [
        "id" => 1,
        "nome" => "Chaves do 8",
        "idade" => 25,
    ];
    extract($aluno)
    ?>
    <!-- ======== Forma sem Função ======== -->
    <!-- <ul>
        <li>ID: <?=$aluno['id']?></li>
        <li>Nome: <?=$aluno['nome']?></li>
        <li>Idade: <?=$aluno['idade']?></li>
    </ul> -->

    <!-- ======== Forma com Função ======== -->
    <ul>
        <li>ID: <?=$id?></li>
        <li>Nome: <?=$nome?></li>
        <li>Idade: <?=$idade?></li>
    </ul>

    <h3>array_sum</h3>
    <?php 
    // Função para somar os valores de array

    $total = array_sum($valores);
    ?>
    <p>Soma dos valores: <?=$total?></p>

    <h3>array_unique</h3>
    <?php 
    // Array que retorna um novo array com dados únicos.

    $produtos = [
        "Tv", "Notebook", "Tv",
        "Geladeira", "Monitor", "Notebook",
        "Teclado", "Mouse"
    ];

    $produtosUnicos = array_unique($produtos);
    ?>

    <pre><?=var_dump($produtos)?></pre>
    <pre><?=var_dump($produtosUnicos)?></pre>






    <hr>
    <h2>Filtros</h2>
    <p>Recursos de an´slise e limpeza de dados aplicados atráves das funções <code>filter_var()</code> e <code>filter_input()</code>.</p>

    <h3>Validação</h3>
    <?php 
        // $email = "tiago.com.br";
        $email = "tiago@a.com.br";
    ?>
    <pre><?=var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)) ?></pre>


    <h3>Sanitização</h3>
    <?php 
        $ataque = "<script> 
            document.body.innerHTML = '<h1> Sou ráqui!! mwahaha </h1>'
        </script>";
        // Execução sem satização ()script é válido  
        // echo $ataque; 

        $ataqueSanitizado = filter_var($ataque, FILTER_SANITIZE_SPECIAL_CHARS);
        // Execução com sanitização (script é anulado)
        echo $ataqueSanitizado;
        
    
    ?>




    <hr>
    <h2>Segurança (criptografia)</h2>
    <?php 
    // Senha em texto puro (plani text)
        $senha = "paçoca";

    // Algoritmos mais comuns para criptografia:
    // MD5, SHA1, SHA256

    // Estes algoritmos pegam dados e os codificam/criptografam, tornando um "hash" de dados embaralhados
    
    $senhaMD5 = md5($senha);
    ?>

    <p>Senha (texto puro): <?= $senha ?></p>
    <p>Senha (MD5): <?=$senhaMD5?></p>


    
</body>
</html>