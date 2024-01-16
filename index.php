<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LINK SERVICES</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>

<body>
  <header>
   

    
    <nav class="navbar navbar-light background-color: #e3f2fd;">
      <a class="navbar-brand" href="#">
        <img src="./imagen/logo.jpg" width="200" height="200" class="d-inline-block align-top" alt="">
      </a>
      <h1 class="display-4">Link Services</h1>
      <ul class="nav ml-auto">
        <li class="nav-item">
          <a class="btn btn-primary mr-2" href="acesso.php">Entrar</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary mr-2" href="criar_conta.php">Criar Conta</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-primary" href="#">Publicar Anúncio</a>
        </li>
      </ul>
    </nav>
   
  </header>

  <section class="d-flex flex-column align-items-center vh-60">
<div style="background-color: #e3f2fd;">
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <input class="form-control mr-sm-3" type="search" placeholder="Qual serviço procura ?" aria-label="Search" style="width: 400px; font-size: 18px;">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </nav>
    </div>
  </section>



  <div class="card-deck " >

    <div class="card bg-light mb-3 " style="width: 18rem;">
      <img class="card-img-top" src="./imagen/eletrecidade.jpg" alt="Imagem de capa do card">
      <div class="card-body">
        <p class="card-text">Serviços Eletricos. <br>
           Descrição: xxxxxxxxxxxxxxxxxxxxx</p>
        <button type="button" class="btn btn-secondary btn-sm">Contratar</button>
      </div>
    </div>
    <div class="card bg-light mb-3 " style="width: 18rem;">
      <img class="card-img-top" src="./imagen/encanador.jpg" alt="Imagem de capa do card">
      <div class="card-body">
        <p class="card-text">Serviços Hidraulicos.<br>
        Descrição: xxxxxxxxxxxxxxxxxxxxx</p>
        <button type="button" class="btn btn-secondary btn-sm">Contratar</button>
      </div>
    </div>
    <div class="card bg-light mb-3 " style="width: 18rem;">
      <img class="card-img-top" src="./imagen/pintor.jpg" alt="Imagem de capa do card">
      <div class="card-body">
        <p class="card-text">Pintura.<br>
        Descrição: xxxxxxxxxxxxxxxxxxxxx</p>
        <button type="button" class="btn btn-secondary btn-sm">Contratar</button>
      </div>
    </div>
    <div class="card bg-light mb-3" style="width: 18rem;">
      <img class="card-img-top" src="./imagen/mecanico.jpg" alt="Imagem de capa do card">
      <div class="card-body">
        <p class="card-text">Serviços Mecanica<br>
        Descrição: xxxxxxxxxxxxxxxxxxxxx</p>
        <button type="button" class="btn btn-secondary btn-sm">Contratar</button>
      </div>
    </div>
  </div>

  <footer class="container mt-4">

  </footer>

  <!-- Adicione o link para os scripts do Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>