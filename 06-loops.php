<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        p,h1,h2,h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1>Loops no PHP</h1>
        <hr>
        <h2>Tradicionais: <code>while e for</code>:</h2>

        <?php
        $i = 1;
        while ($i <= 3) { ?>
            <p class="alert alert-info">Senac Penha</p>

        <?php
            $i++;
        }
        ?>
        <h2>Exemplo com <code>for</code>:</h2>
        <hr>
        <?php
        for ($i = 1; $i <= 5; $i++) {
        ?>
            <p class="alert alert-warning">exemplo <?= $i ?></p>
        <?php
        }
        ?>
<hr>
        <h3><code>for </code>com <code>array</code></h3>
    <?php
    $alunos = ["chaves","chapolin","kiko"];
    for($i = 0; $i< count($alunos);$i++){
    ?>
<p class="alert alert-success"><?=$alunos[$i]?></p>
<?php } ?>    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>