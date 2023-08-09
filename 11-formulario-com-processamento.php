<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários e PHP combinados</title>
</head>
<body>
    <h1>Formulário e Processamento Juntos</h1>
    <hr>


    <?php 
        // Se o batão enviar for acionado/definido/setado, significa que o formulário foi enviado
        if (isset($_POST["enviar"])) {
          $nome = $_POST['nome'];
          $email = $_POST['email'];
    ?>
        <h2>Dados processados:</h2>
        <p>Nome: <?=$nome?></p>
        <p>Email: <?=$email?></p>
    <?php
        } else {
    ?>

        <!-- Nesta versão, deixe o action vazio -->
        <form action="" method="post">
            <!-- ========== Nome ========== -->
            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </p>

            <!-- ========== Email ========== -->
            <p>
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
            </p>
            <!-- ========== Botão Enviar ========== -->
            <button type="submit" name="enviar" id="enviar">Enviar</button>

        </form>

    <?php
    }
    ?>
    
    
</body>
</html>