<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 - Condicionais</title>
    <style>
        body {background-color: aliceblue;}
        h1 {text-align: center;}
        .estilo {font-weight: bold;}

    </style>
</head>
<body>
   <h1>Aumento Salarial</h1> 
    
   <?php 
        $salario = 2500;
        
        if($salario < 1500){
            $aumento = $salario * 1.15;      

        } elseif($salario <= 3000) {
            $aumento = $salario * 1.10;
           

        } else {
            $aumento = $salario * 1.05;
            
        }
        
   ?>
    <p>Salario Antigo: <span class="estilo">R$ <?=$salario = number_format($salario, 2, ',', '.')?></span></p>
    <p>Reajuste Salarial: <span class="estilo">R$ <?= $aumento = number_format($aumento, 2, ',', '.')?></span></p>
 


</body>
</html>