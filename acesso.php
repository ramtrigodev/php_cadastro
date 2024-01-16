<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>LINK SERVICES</title>
</head>

<body>



    <div class="container d-flex justify-content-center align-items-center vh-100">
        <?php if (isset($mensagemErro)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $mensagemErro; ?>
            </div>
        <?php } ?>
        <!-- <form method="POST" action="php/verificar.php" class="text-center">
        <figure class="mb-4">
            <img src="./imagen/logo.jpg" width="200" height="200" class="d-inline-block align-top" alt="Logo">
        </figure>

        <div class="form-group">
            <label for="usuario">E-mail:</label>
            <input type="text" name="usuario" id="usuario" class="form-control" required placeholder="Digite o RA">
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" class="form-control" required>
        </div>
        <input type="submit" class="btn btn-primary" value="Entrar">
        <button type="button" class="btn btn-secondary" onclick="redirecionamento()">Cadastro Alunos</button>
    </form> -->
        <form>
            <figure class="mb-4">
                <img src="./imagen/logo.jpg" width="200" height="200" class="d-inline-block align-top" alt="Logo">
            </figure>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite o email:">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Digite a senha">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembre-se de min</label>
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
            <p></p>
            <p><a href="#" class="link-underline-light">Esquece a senha ?</a></p>

        </form>
        <script>
            function redirecionamento() {
                window.location.href = "cadastro_alunos_direto.php";
            }
        </script>
    </div>
</body>

</html>