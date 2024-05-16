<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio - 03 php</title>
</head>

<body>
    <h1>exercicio 03 PHP</h1>
    <hr>
    <ol>
        <?php
        $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
        $i = 0;
        foreach ($meses as $mes) {
            $cor = $i % 2 == 0 ? 'blue' : 'red';
            echo "<li style='color: $cor;'>$mes</li>";
            $i++;
        }
        ?>
    </ol>
</body>

</html>