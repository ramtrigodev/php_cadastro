<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">

<head>
    <title>LINK SERVICES</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="./js/app.js"></script>
    <link href="./css/app.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1f76937ee1.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />

</head>


<body>


    <header>
        <nav class="navbar navbar-light background-color: #e3f2fd; d-flex align-items-center justify-content-center " style="margin-right: 180px;>
            <a class=" navbar-brand" href="#">
            <img src="./imagen/logo.jpg" width="200" height="200" class="d-inline-block align-top" alt="">
            </a>
        </nav>

    </header>
    <section>


        <div class="container d-flex align-items-center justify-content-center ">

            <form method="post" action="./php/cadastro_usuario.php">
                <div class="form-group row">
                    <div class="col-md-7 ">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-5 ">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="senha" required>
                    </div>

                    <div class="form-group col-md-3">

                        <label for="senha">Repetir Senha</label>

                        <input type="password" class="form-control" name="senha" required>

                    </div>
                    <div class="row">
                        <div class="col">

                        </div>
                        <div class="col">

                        </div>
                    </div>

                </div>
                <div class="col">
                    <button type="submit" class="btn btn-primary">Criar uma conta</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>