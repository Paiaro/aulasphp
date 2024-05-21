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
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
        }

        h1 {
            color: #4CAF50;
            text-align: center;
            margin: 20px 0;
        }

        ol {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            list-style-type: none;
            margin: 0;
        }

        li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        li:last-child {
            border-bottom: none;
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
<!-- correção/versão do professor -->
    <ol>
<?php
$mesesdoano = ['janeiro','fevereiro'];
?>
<?php
foreach ($mesesdoano as $mes){
    ?>
    <li> <?=$mes?></li>
    <?php
}
?>

    </ol>
</body>

</html>
