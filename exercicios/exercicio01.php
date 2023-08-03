<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        <?php $cor = "pink";?>
        
        body { background-color: <?=$cor?>;}
        h1 {text-align: center}
        li {list-style-type: none}
         
    </style>
</head>
<body>
    
    <?php 
    
        // Definindo fuso horário (timezone)
        date_default_timezone_set("America/Sao_Paulo");

        $data = date("F j, Y, g:i a");
        $hora = date("H:i:s");
        $semana = date("l");
        const NOME = "Maria";
        $curso = "PHP";
        define("DATA", date("Y-d-m"));
        $cargaHoraria = 96;

        $limiteFaltas = $cargaHoraria / 4;
    ?>
    <h1>Calculadora de Limites de Faltas</h1>
    <hr>
    <br>
    <p>Data: <?=$data?> - <?=$semana?></p>
    <p>Hora: <?=$hora?></p>
    <p>Nome: <?=NOME?></p> 
    <p>Curso: <?=$curso?> </p>
    <p>Carga Horária: <?=$cargaHoraria?></p> 
    <p>Limites de faltas: <b><?=$limiteFaltas?>h.</b></p>

    <?php 
        $teste = "PHP Intelephense";
        echo $teste;
        
    ?>
    <hr>
    <ul>
        <li>Data: <?=DATA?> - <?=$semana?></li>
        <li>Nome: <?=NOME?></li>
        <li>Curso: <?=$curso?></li>
        <li>Carga Horária: <?=$cargaHoraria?></li>
        <li>Limites de faltas: <b><?=$limiteFaltas?>h.</b></li>
    </ul>
</body>
</html>