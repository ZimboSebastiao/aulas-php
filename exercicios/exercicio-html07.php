<?php require 'exercicio07.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <hr>
    

    <form action="exercicio07.php" method="post">

        <!-- ========== Nome ========== -->
        <p>
            <label for="nome">Nome do Produto</label>
            <input type="text" name="nome" id="nome">
        </p>

        <!-- ========== Fabricante ========== -->
        <p>
            <label for="fabricante">Fabricante do Produto</label>
            <select name="fabricante" id="fabricante">
                <option value=""></option>
                <?php foreach ($fabricantes as $fabricante) {?>
                <option value="<?=$fabricante;?>"><?=$fabricante?></option>
                <?php }?>
            </select>    
        </p>

        <!-- ========== Preço ========== -->
        <p>
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" step=".01" min="100" max="10000">
        </p>

        <!-- ========== Disponibilidade ========== -->
        <p>
            <label for="sim">Sim</label>
            <input type="radio" name="disponibilidade" id="sim" value="Sim">

            <label for="nao">Não</label>
            <input type="radio" name="disponibilidade" id="nao" value="Não">
        </p>

        <!-- ========== Descrição ========== -->
        <p>
            <label for="descricao">Descrição</label> <br>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
        </p>

        <!-- ========== Botão Enviar ========== -->
        <p>
            <button type="submit" name="enviar" id="enviar">Enviar</button>
        </p>
    </form>


    
</body>
</html>