<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreys</title>
</head>

<body>
    <h1>Arrays</h1>
    <hr>
    <h2>Arrays numéricos/indexados</h2>
    <?php

    //declarando Arrays
    $bandas = ["rush", "slayer", "DIO"];
    $cursos = array("HTML5", "PHP", "Design", "JS");

    define("UNIDADES_SESC", ["belenzinho", "bertioga"]);
    const UNIDADES_SENAC = ["Penha", "São Miguel", "Itaquera"];




    ?>
    <h3>Acesso e saída de dados</h3>

    <p>Curto a banda <?= $bandas[1] ?>.</p>
    <p>Já estudei <?= $cursos[3] ?>.</p>
    <p>Gostaria de conhecer o SESC <?= UNIDADES_SESC[1] ?></p>
    <hr>


    <h2>arrays associativos</h2>
    <?php

    $filme = ["titulo" => "deadpool 2", "ano" => 2018, "genero" => "acão", "personagens" => ["Wade Wilson", "Fanático"]]; //chave associativa

    $livro = array("titulo"=>"senhor dos anéis", "autor" => "tolkien");
    ?>

    <h3>Acesso e saida de dados</h3>
    <p>O filme <?=$filme["titulo"]?> foi lançado em <?=$filme["ano"]?>.</p>
</body>

</html>