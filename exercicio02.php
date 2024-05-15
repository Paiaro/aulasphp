<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>

<body>
    <h1>Exercicio 02</h1>
    <hr>

    <?php
    $dados = [
        "nome_usuario" => "chapolin.colorado",
        "senha" => "123teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        "telefones" => ["11-2135-0300", "11-91234-5678"]
    ];

    ?>
    <ol>
  <li>Nome de usuário: <?=$dados["nome_usuario"]?></li>
  <li>Idade: <?=$dados["idade"]?></li>
  <li>Cidade: <?=$dados["cidade"]?></li>
  <li>Telefone: <?=$dados["telefones"][0]?></li>
</ol>

</body>

</html>