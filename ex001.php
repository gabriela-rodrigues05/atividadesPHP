<html>
    <head>
        <title>Exemplo com PHP</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Dia e Noite</h1>
        <?phP
            date_default_timezone_set("America/Sao_Paulo");
            $hoje = date("d/m/Y");
            $agora = date("H:i:");
            $hora = date("H");
            if ($hora < 6 or $hora > 18){
                echo "<img src='lua.png'>";
            }else{
                echo "<img src='sol.png'>";
            }

            if ($hora >= 4 && $hora <= 12) {
                echo "Bom dia, ";
            } elseif ($hora >= 13 && $hora <= 18) {
                echo "Boa tarde, ";
            } else {
                echo "Boa noite, ";
            }

            echo "hoje é dia ". $hoje . " e agora são " . $agora . "horas.";
        ?>
    </body>
</html>