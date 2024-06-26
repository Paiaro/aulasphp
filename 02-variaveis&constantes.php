<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis e constantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h1>Variaveis e Constantes</h1>
<hr>
<h2>Declaração Saida de dados usando <code>echo</code></h2>
<?php
//variaveis

$curso = "programador web";
$ano = 2024;
$area = "back-end";

//Estamos no curso programador web em 2024.

//Saída interpolada (tem que ser com aspas duplas)
echo "<p>Estamos no curso $curso em $ano.</p>";

//com aspas simples não funciona a execução dinâmica.
echo '<p>Estamos no curso $curso em $ano.</p>';

//Constantes

define("AUTOR","Gabriel Paiaro"); // Tradicional/antiga
const EMPRESA = "ABC Tecnologia"; // Nova, moderna

// Gabriel trabalha na empresa ABC Tecnologia
echo "<p>".AUTOR." trabalha na empresa ".EMPRESA."</p>";

?>

<h2>Saida de dados simplificada/direta</h2>
<!-- Estamos no curso programador web em 2024 -->

<p>Estamos no curso <?=$curso?> em <?=$ano?>.</p>

<!-- Gabriel trabalha na empresa ABC Tecnilogia -->
<p> <?=AUTOR?> trabalha na empresa <?=EMPRESA?></p>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>