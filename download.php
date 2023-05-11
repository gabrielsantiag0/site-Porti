<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="Css/download.css">
    <title>Download</title>
</head>
<!-- cabeçario -->
<body class="bg-white">
  <?php 
    include 'menu.php';
  ?>
<!-- botao download -->
  <main>
    <div class="">
      <div class="d-flex justify-content-center bg-secondary">
      <p class="text-white text-decoration-underline m-2 text-center">Primeira versão</p><p class="text-white m-2">está disponivel agora! e correções de Maio.</p>
      </div>
      <div class="container-fluid text-center">
        <div class="row m-4">
          <div class="col text-black mt-5">
            <h3 class="mt-5">
             Faça seu Download
            </h3>
            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
              <button type="button" class="btn btn-primary">Download</button>            
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item fs-5" href="#">Androi</a></li>
                  <li><a class="dropdown-item fs-5" href="#">iOS</a></li>
                </ul>
              </div>
            </div>
          <div class="d-flex justify-content-center">
            <h5 class="text-primary">Android</h5>&nbsp;&&nbsp; <h5 class="text-primary">iOS</h5>
          </div>
          </div>
          <div class="col">
           <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/app1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item active">
      <img src="img/app4.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/app2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/app3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
          </div>
        </div>
        </div>
      </div>
  </main>
    <!-- rodapé -->
    <?php 
    include 'footer_novo.php';
  ?>
</body>
<script src="Js/estilo.js"></script>
</html>