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
        <h1>Condicionais no PHP (refatorado)</h1>
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

        $produto = "ultrabook";
        $qtdEstoque = 0;
        $qtdCritica = 2;


        ?>
        <h3>Produto: <?= $produto ?></h3>
        <h3>quantidade no estoque: <?= $qtdEstoque ?></h3>


        <?php

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



        if ($produto == "TV") {

            $garantia = 5;
            $ano = "anos";
        } elseif ($produto == "Geladeira") {
            $garantia = 3;
        } elseif ($produto == "TV") {
            $garantia = 2;
        } else {
            $garantia = 1;
            $ano = "ano";
        }

        ?>
        <p class="text-info bg-dark">o produto <?= $produto ?> tem a garantia de <?= $garantia ?> <?= $ano ?>.</p>


        <p><span>ano<?php if ($garantia > 1) echo "s" ?></span></p>

        <hr>
        <h2>codicional com <code>switch/case</code></h2>
        <p><i>Estrutura alternativa para condicional encadeada</i></p>

        <?php
        switch ($produto) {
            case 'Ultrabook':
                $garantia2 = 5;
                break;
            case 'tv':
                $garantia2 = 2;
                break;
            case 'Geladeira':
                $garantia2 = 3;
                break;
            default:
                $garantia2 = 1;
                break;
        };
        ?>
        <P>Garantia:<?= $garantia2 ?> ano.</P>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>