<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>

    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Função como procedimento ou sub-rotina</h2>

    <?php 
    
        function dadosAutor(){
            echo "<div>";
            echo "<p>Tiago B. dos Santos</p>";
            echo "<p><a href=''>email@aa.com</a></p>";
            echo "<div/>";
        }
    
    ?>

    <section>
        <h3>Chamada da sub-rotina/procedimento</h3>
        <?=dadosAutor()?>
    </section>


    <hr>

    <h2>Função com retorno de dados</h2>

    <?php 
    
        function dadosCurso(){

            return "Técnico em informática para Internet";
        }
    
    ?>

    <p>Estamos no curso de <?=dadosCurso()?></p>
    <p><?=dadosCurso()?> é ministrado no Senac Penha</p>

    <hr>

    <h2>Função com Parâmetros (ou argumentos)</h2>
    <?php 

        function soma($valor1, $valor2, $valor3){
            $total = $valor1 + $valor2 + $valor3;
            return $total;

        }
        
    ?>
    <!-- Chamando e exibindo diretamente o retorno -->
    <p>Resultado 1: <?=soma(10, 20, 5)?></p>
    <p>Resultado 2: <?=soma(23, 84, 1000.75)?></p>
    
    

    <?php 
        // Chamando e guardando o retorno
        $resultado3 = soma(500, 480, 700);
    ?>
    <p>Resultado 3: <?=$resultado3?></p>
    <?php 
        if ($resultado3 > 100) { ?>
        <p>Vinicius  foi demitido!</p>
        <?php
        }
        ?>


    <hr>

    <?php if (soma(2, 3,10) >= 10) { ?>
        <p>Leandro reprovado</p> 

        <?php  
        }
        ?>

</body>
</html>