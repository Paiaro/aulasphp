<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com PHP</title>
</head>

<body>
    <h1>Formulário e processamento juntos</h1>
    <hr>
    <?php
    // detectando o envio/acionamento do formulario
    if (isset($_POST['enviar'])) {
        $nome = $_POST["nome"];

    ?>
        <h2>bem vindo(a)! <?=$nome?> </h2>
        <hr>
    <?php } else{ ?>
    <!-- Mantenha o action vazio -->
    <form action="" method="post"> <label for="nome">Nome:</label> <input required type="text" name="nome" id="nome"> <button type="submit" name="enviar">Enviar</button> </form>

    <?php
    }
    ?>
</body>

</html>