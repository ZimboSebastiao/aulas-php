<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 - Funções (OK)</title>
<style>
    .aprovado { color: blue; }
    .reprovado { color: red; }
</style>
</head>
<body>
    <h1>Exercício 05 - Funções (OK)</h1>
    <hr>

<?php
function calcularMedia( float $n1, float $n2 ):float {
    return ($n1 + $n2) / 2;
}

function verificarSituacao( float $valorMedia ):string {
    if($valorMedia >= 7){
        return "aprovado";
    } else {
        return "reprovado";
    }
}
$nota1 = 10;
$nota2 = 7;
$media = calcularMedia($nota1, $nota2);
$situacao = verificarSituacao($media);
?>
<p> <?=$media?> </p>
<p class="<?=$situacao?>"> <?=$situacao?> </p>
  


</body>
</html>