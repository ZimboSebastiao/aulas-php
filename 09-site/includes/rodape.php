</main>

<footer>
    <p>Site criado para o curso <b>Téc. Informática para Internet</b></p>
    <?php 
    
    // Definindo fuso horário (timezone)
    date_default_timezone_set("America/Sao_Paulo");

    $data = date("F j, Y, g:i a");
    $semana = date("l");
?>
<p>Data: <?=$data?> - <?=$semana?></p>
    
</footer>
</body>
</html>