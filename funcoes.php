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
    
</body>
</html>