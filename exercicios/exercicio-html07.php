<?php require 'exercicio07.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>

    <!-- Zimbo, o ideal é o seu css vir APÓS o do Bootstrap.
    Desta forma, o seu sempre terá prioridade -->
    <style>
        * {box-sizing: border-box;} 

        body {
            background-color: #6a6679 !important;
        }

        .limitador {
            width: 30vw;
            margin: auto;
        }

        h1, #enviar  {text-align: center;}
        
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1>Cadastro de Produtos</h1>
    <hr>
    <main class="limitador">

        <form action="exercicio07.php" method="post">
    
            <!-- ========== Nome ========== -->
            <p class="input-group mb-3">
                <!-- <label for="nome">Nome do Produto</label> -->

                <!-- Tenho dúvidas sobre se é correto substituir o <label>
                pelo <span> da forma como você fez, principalmente quanto à acessibilidade.
                Acho que vale a pena dar uma pesquisada sobre isso, talvez no próprio site do Bootstrap 
                tenha algo sobre o assunto. -->

                <span class="input-group-text" id="inputGroup-sizing-default">Nome do Produto</span>
                <input type="text" name="nome" id="nome" require class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </p>
    
            <!-- ========== Fabricante ========== -->
            <p class="form-floating">
                <select name="fabricante" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <!-- Uso correto! Numa situação real, o value seria um id do fabricante (vindo do banco) -->
                    <option selected></option>
                    <?php foreach ($fabricantes as $fabricante) {?>
                    <option value="<?=$fabricante;?>"><?=$fabricante?></option>
                    <?php }?>
                </select>    
                <label  for="floatingSelect">Fabricante do Produto</label>
            </p>
    
            <!-- ========== Preço ========== -->
            <div class="input-group mb-3">

                <span class="input-group-text">$</span>
                <span class="input-group-text">Preço</span>
                <input type="number" name="preco" id="preco" step=".01" min="100" max="10000" require class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
            </div>
    
            <!-- ========== Disponibilidade ========== -->
            <div>
                <p class="form-check">
                    <input class="form-check-input" type="radio" name="disponibilidade" id="sim" value="Sim">
                    <label class="form-check-label" for="sim">Disponível</label>
                </p>
                <p class="form-check">
        
                    <label class="form-check-label" for="nao">Indisponível</label>
                    <input class="form-check-input" type="radio" name="disponibilidade" id="nao" value="Não">
                </p>
            </div>
    
            <!-- ========== Descrição ========== -->
            <p class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="descricao" cols="30" rows="10"></textarea>
                <label for="floatingTextarea2">Descrição</label> <br>
            </p>
    
            <!-- ========== Botão Enviar ========== -->
            <p class="col-auto" id="enviar">
                <button type="submit" name="enviar" id="enviar" class="btn btn-primary btn-lg">Enviar</button>
            </p>
        </form>
    </main>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>