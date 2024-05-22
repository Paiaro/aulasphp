<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processando os dados</title>
</head>

<body>
    <h1>Processamento dos dados vindos do formulário</h1>
    <hr>

    <?php
    // capturando dados prevenientes do formulário usando o array superglobal $_POST[] (se o form usar o metodo get, então usariamos $_GET[]).
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $nascimento = $_POST["nascimento"];
    $mensagem = $_POST["mensagem"];
    ?>
    <?php
    if (empty($nome) || empty($email)) {
    ?>
        <p>você deve preencher o <b>nome</b> e <b>e-mail</b>.</p>

    <?php
    } else {
      

    ?>
        <h2>Dados recebidos</h2>
        <hr>
        <ul>
            <li>Nome: <?= $nome ?></li>
            <li>E-mail: <?= $email ?></li>

<!-- se não estiver vazio -->
            <?php if(!empty($nascimento)){
            
            ?>
            <li>Data de nascimento: <?= $nascimento ?></li>
            <?php }?>


            <?php if(!empty($mensagem)){

            ?>
            <li>Mensagem: <?= $mensagem ?></li>
            <?php }?>
        </ul>
    <?php
    } ?>
</body>

</html>