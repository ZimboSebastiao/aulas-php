</main>

<footer>
    <p>Site criado para o curso <b>Téc. Informática para Internet</b></p>
    <?php 
    // Definindo fuso horário (timezone)
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/y h:i");
    $semana = date("l");
?>
<time>Data: <?=$data?> - <?=$semana?></time>
    
</footer>
</body>
</html>