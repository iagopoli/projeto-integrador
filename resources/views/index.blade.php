<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="icone.ico">
  <title>Viver bem </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="/css/style.css">

</head>

<body>
  <!-- inicio do nav bar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="imglogo" src="/logo.png" alt="Terceiro Slide">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
      aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Categorias
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/alimentaçao">Alimentação</a>
            <a class="dropdown-item" href="/habitos">Hábitos saudáveis</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Calculadoras
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/IMC">IMC</a>
            <a class="dropdown-item" href="/TMB">TMB</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="/sobre">Sobre</a>
        </li>
        <li class="nav-item" id="loginBt">
          <a class="nav-link disabled" href="/login"><button class="btn btn-primary login-button">Login</button></a>
        </li>
        <li class="nav-item hideElement" id="sairBt">
          <button class="btn btn-primary login-button" onclick="sairLogin()">Sair</button>
        </li>
      </ul>

    </div>
  </nav>
  <!-- fim do navbar-->

  <!-- inicio do carousel -->
  <div class="container-fluid px-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active" style="height:700px;  ">
          <img class="d-block w-100"
            src="https://www.blog.nadarte.com/wp-content/uploads/2020/09/post_thumbnail-7aa5da8f19c9a0b0b0998194811ca5aa-1160x770.jpeg"
            alt="Primeiro Slide">
        </div>
        <div class="carousel-item" style="height:700px;">
          <img class="d-block w-100"
            src="https://www.blog.nadarte.com/wp-content/uploads/2020/09/post_thumbnail-7aa5da8f19c9a0b0b0998194811ca5aa-1160x770.jpeg"
            alt="Segundo Slide">
        </div>
        <div class="carousel-item" style="height:700px;">
          <img class="d-block w-100" src="https://th.bing.com/th/id/OIP.WezAVAXa1bf6V6_0HzDNlAHaE8?pid=ImgDet&rs=1"
            alt="Terceiro Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
  <!-- fim do carousel -->
  <br>
  <div class="container">
    <div class="mx-auto" style="width: 60%;">
      <h1> Aqui entraria o primeiro topico</h1>
    </div>
    <br>
    <br>
    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi perspiciatis, repellendus temporibus odit natus
      blanditiis quia incidunt eveniet corporis, quos possimus quaerat at, est beatae. Enim, eius odio. Earum,
      quasi.lorem AIDNAFEFFeFFAFE</p>

    <img
      src="https://treinomestre.com.br/wp-content/uploads/2019/10/exerc%C3%ADcios-abdominais-para-fazer-em-casa-sem-aparelho-.jpg"
      class="rounded mx-auto d-block" alt="...">

  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <!-- FOOTER -->
  <div class="d-flex flex-column h-100">

    <footer class="w-100 py-4 flex-shrink-0">
      <div class="container py-4">
        <div class="row gy-4 gx-5">
          <div class="col-lg-4 col-md-6">
            <h5 class="h1 text-white">Viver bem</h5>
            <p class="small text-muted"> Site informativo sobre alimentação saudável e informações essenciais para o
              pleno funcionamento do corpo humano</p>
            <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary"
                href="https://classroom.google.com/u/0/c/NTg4OTkyOTAxMDE1?hl=pt-BR">projetointegrador</a></p>
          </div>
          <div class="col-lg-2 col-md-6">
            <h5 class="text-white mb-3">Inicio</h5>
            <ul class="list-unstyled text-muted">
              <li><a href="/">Home</a></li>

            </ul>
          </div>

          <div class="col-lg-2 col-md-6">
            <h5 class="text-white mb-3">Suporte</h5>
            <ul class="list-unstyled text-muted">
              <li><a href="/faq">FAQ</a></li>

            </ul>

          </div>
        </div>
      </div>
    </footer>
  </div>
  <!-- FIM DO FOOTER -->
  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-app-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-auth-compat.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-firestore-compat.js"></script>

  <script src="/js/startFirebase.js"></script>
  <script src="/js/login.js"></script>
  <script src="/js/register.js"></script>
</body>

</html>
