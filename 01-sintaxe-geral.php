<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral - <?=ESCOLA?></title>
    <style>
        p { font-family: "Verdana";}
        .destaque{ text-transform: uppercase;}
    </style>
</head>
<body>
    <h1 class="destaque">Tralhando com PHP</h1>
    <hr>

    <?php
    // Geração de texto (string)
    // Classes CSS
    echo "<p class='destaque'>Hoje tem Corinthians</p>";
    echo "Hoje tem <span class='destaque'>Corinthians</span>";


    // Geração de texto estruturado (com tags, atributos)
    echo "<h2>Gerando HTML através do PHP</h2>";

    // CSS inline (atenção às formas de uso de aspas)
    echo "<p style=\"color:red\"> O Vinicius está reprovado </p>";
    echo "<p style='color:orange'> O Vinicius está reprovado</p>";
    echo '<p style="color:pink" class="destaque"> O Vinicius está reprovado</p>';




    ?>

    <script>

        let destaque = document.querySelector("p.destaque");
        console.log(destaque);

    </script>
</body>
</html>