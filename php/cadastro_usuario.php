<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senhaCriptografada = md5($senha, PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarioss (nome, email, senha) VALUES ('$nome', '$email', '$senhaCriptografada')";

if ($conn->query($sql) === TRUE) {
    $tipoMensagem = "primary";
} else {
    echo "Erro ao inserir registro: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>LINK SERVICES</title>
</head>

<body>

    <div class="container mt-3">
        <div class="alert alert-<?php echo $tipoMensagem; ?>" role="alert">
            <?php
            $mensagem = "Cadastro realizado com sucesso !!!!";
            echo $mensagem; ?>
        </div>
    </div>
    <script>
        setTimeout(function() {
          //  document.getElementById('alert-message').style.display = 'none';
          window.location.href = "../index.php";
        }, 2000); // 10 segundos
    </script>

</body>

</html>