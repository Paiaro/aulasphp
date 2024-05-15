<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01 php 15/05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
  .nome {
      font-weight: bold;
      color : #C70039;
    }
    .idade {
      font-weight: bold;
      color: #80B3FF;
    }


    </style>
</head>
<body>
    <h1>Exercicio php</h1>
    <hr>
<?php
$nome = 'Chapolin';
$idade = 25;
?>
<p> <span class = "nome alert alert-primary" role="alert"><?=$nome?></span> possui <span class = "idade alert alert-primary" role="alert"><?=$idade?></span> anos.</p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>