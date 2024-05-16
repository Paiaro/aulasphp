<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 - Condicionais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        p {
            font-size: larger;
            color: #32012F;

        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Condicionais no PHP</h1>
        <hr>
        <h2>Condicionais Simples (não tem o <code>else</code>)</h2>

        <?php
        $numero = 50;
        if ($numero < 100) {

            echo "<p class =\"alert alert-success\">$numero é verdadeira/true!</p>";
        }
        ?>
        <h2>Condicional composta (usa <code>if/else</code>)</h2>
        <hr>

        <?php
        //controle de estoque
        $produto = "ultrabook";
        $qtdEstoque = 0; // o que temos no estoque
        $qtdCritica = 2; //minimo necessario


        ?>
        <h3>Produto: <?= $produto ?></h3>
        <h3>quantidade no estoque: <?= $qtdEstoque ?></h3>


        <?php
        // se a quantidade de estoque for abaixo da quantidade critica, o sistema deve avisar e pedir para repor.
        if ($qtdEstoque < $qtdCritica) {
            echo "<p class=\"alert alert-warning\">necessario repor estoque</p>";
            if ($qtdEstoque == 0) {
                echo "<p class = \"alert alert-danger\">Necessario comprar com urgencia</p>";
            }
        } else {
            echo "<p class= \"alert alert-success\">Estoque normal</p>";
        }

        ?>
        <hr>
<h2>Encadeada (usa <code>if,else,elseif</code>)</h2>
<?php

//verificando produto e atribuindo diferentes garantias

if($produto == "ultrabook"){

$garantia = 5;
}
elseif ($produto == "Geladeira"){
$garantia = 3; 

}elseif ($produto == "TV"){
    $garantia = 2;
}else {
    $garantia = 1;
}

?>
<p class="text-info bg-dark">o produto <?=$produto?> tem a garantia de <?=$garantia?> anos.</p>






    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>