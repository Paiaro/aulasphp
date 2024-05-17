<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 PHP</title>
    <style>
        .blue {
            color: blue;
        }

        .red {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Exercício 03 PHP</h1>
    <hr>
    <ol>
        <?php
        $meses = ["janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];
        ?>
        <?php foreach ($meses as $i => $mes): ?>
            <li class="<?= $i % 2 == 0 ? 'blue' : 'red'; ?>">
                <?= htmlspecialchars($mes, ENT_QUOTES, 'UTF-8') ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>
