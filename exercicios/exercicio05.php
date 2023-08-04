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
        p, h1 {text-align: center;}
        
    </style>
</head>
<body>
    
    <h1>Verificação da situação do aluno</h1>
    <?php 
       
        // Função 1: Calcular o valor da Média
        function notas(float $n1, float $n2){
            $media = $n1 + $n2 / 2;
            return $media;
        }

        // Chamando e guardando o retorno
        $verificacao = notas(1.5, 6.5);


        // Função 2: Calcular o valor da Média
        function resultado(float $verificacao):string{
            if ($verificacao > 7 ) {
                    return "<span class='aprovado'>Aprovado</span>";
                }
                return "<span class='reprovado'>Reprovado</span>";
        }
        
    ?>
     <p>Média do Aluno: <?=$verificacao?></p>
     <p>Situação do Aluno: <?=resultado($verificacao)?></p>

    






</body>
</html>