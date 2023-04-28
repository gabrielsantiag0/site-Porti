<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/ReceitasCriancas.css">
    <title>RECEITAS De CRIANÇAS</title>
</head>
<body class="fundo">
     <!-- cabeçario -->
     <?php 
    include 'menu.php';
  ?>
    <!-- receitas  -->
    <main class="container mt-5 border border-1 border-black bg-white">
        <div class="m-4">
          <a class="text-black" href="receita.php">&Larr; Voltar</a>
        </div>
        <div class="row row-cols-1 row-cols-md-2 g-4 m-4">
            <div class="col">
              <div class="card">
                <a href="./ReceitaDoce/BoloDeAbacaxiECastanha.php">
                  <img src="Img/BoloDeAbacaxiECCastanhaDeCaju.jpg" class="card-img-top" alt="imagem de bolo de abacaxi com castanha de caju">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Bolo de abacaxi e castanha-de-caju</h5>
                  <p class="card-text">Rendimento: 8 unidades Ingredientes 1 tablete de fermento biológico fresco (15 g)1 chuchu cozido com casca1 ovo2 colheres (sopa) de...</p>
                  <a href="ReceitaDoce/BoloDeAbacaxiECastanha.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitaDoce/TortaDeMousseDeMaracujá.php">
                  <img src="Img/TortaDeMousseDeMaracujá.JPG" class="card-img-top" alt="imagem Torta de mousse de Maracujá">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Torta de mousse de maracujá</h5>Rendimento: 8 porções Ingredientes Base 3 colheres (sopa) de margarina cremosa sem sal1 colher (sopa) de adoçante dietético em pó,...</p>
                  <a href="ReceitaDoce/TortaDeMousseDeMaracujá.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitaDoce/BoloDeBrigadeiro.php">
                  <img src="Img/BoloDeBrigadeiro.jpg" class="card-img-top" alt="imagem bolo de brigadeiro">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Bolo de brigadeiro</h5>
                  <p class="card-text">Rendimento: 16 porções Ingredientes Massa 2 gemas1 xícara (chá) de água quente1/2 xícara (chá) de óleo1/2 xícara (chá) de adoçante…</p>
                  <a href="ReceitaDoce/BoloDeBrigadeiro.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitaDoce/ManjarDosDeuses.php">
                  <img src="img/ManjarDosDeuses.jpg" class="card-img-top" alt="imagem manjar dos deuses">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Manjar dos deuses</h5>
                  <p class="card-text">Rendimento: 10 porções Ingredientes Manjar 4 xícaras (chá) de leite desnatado1 colher (sopa) de amido de milho100 g de farinha...</p>
                  <a href="ReceitaDoce/ManjarDosDeuses.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <a href="./ReceitaDoce/RocamboleRomeuEJulieta.php">
                    <img src="img/RocamboleRomeuEJulieta.jpg" class="card-img-top" alt="imagm do Romeu e Julieta">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Rocambole Romeu e Julieta</h5>
                    <p class="card-text">Rendimento: 12 porções Ingredientes Massa 2 ovos4 claras4 colheres (sopa) de adoçante dietético em pó, próprio para forno e fogão4...</p>
                    <a href="ReceitaDoce/RocamboleRomeuEJulieta.php" class="text-black">Continuar Lendo</a>  
                </div>
                </div>
              </div>
          </div>
    </main>
    <!-- rodapé -->
<?php include 'footer.php';?> 
</body>
<script src="Js/estilo.js"></script>
</html>