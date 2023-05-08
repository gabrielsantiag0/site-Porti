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
             <a href="./ReceitasCriancas/CroissantDeChuchu.php">
               <img src="img/crossntDeChuChu.jpg" class="card-img-top" alt="Imagem do crossnt de chuchu ">
             </a>
                <div class="card-body">
                  <h5 class="card-title">Croissant de chuchu</h5>
                  <p class="card-text">Rendimento: 8 unidades Ingredientes 1 tablete de fermento biológico fresco (15 g)1 chuchu cozido com casca1 ovo2 colheres (sopa) de...</p>
                  <a href="ReceitasCriancas/CroissantDeChuchu.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitasCriancas/GrissiniIntegral.php">
                  <img src="img/GrissiniIntegral.jpg" class="card-img-top" alt="imagem do Grissini Integral">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Grissini integral</h5>
                  <p class="card-text">Rendimento: 36 unidades Ingredientes 1 tablete de fermento biológico1 xícara (chá) de leite desnatado2 colheres (sopa) de azeite de oliva1...</p>
                  <a href="ReceitasCriancas/GrissiniIntegral.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitasCriancas/DelíciaDeAbobrinha.php">
                  <img src="img/deliciaDeAbobrinha.jpg" class="card-img-top" alt="imagem Delicia de abobrinha">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Delícia de abobrinha</h5>
                  <p class="card-text">Rendimento: 24 unidades Ingredientes 2 abobrinhas médias200 g de ricota amassada com o garfo1 ovo2 colheres (sopa) de cheiro-verde picado1...</p>
                  <a href="ReceitasCriancas/DelíciaDeAbobrinha.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitasCriancas/PicoléDeBanana.php">
                  <img src="img/PicoleDeBanana.jpg" class="card-img-top" alt="imagem picolé de Banana">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Picolé de Banana</h5>
                  <p class="card-text">Rendimento: 6 porções Ingredientes 500 ml de leite desnatado1 colher (sobremesa) de amido de milho1 colher (sopa) de adoçante dietético...</p>
                  <a href="ReceitasCriancas/PicoléDeBanana.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <a href="./ReceitasCriancas/GelatinaColorida.php">
                    <img src="img/GelatinaColorida.jpg" class="card-img-top" alt="imagem Gelatina Colorida">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Gelatina Colorida</h5>
                    <p class="card-text">Rendimento: 10 porções Ingredientes 3 envelopes de gelatina em pó dietética (sabores de sua preferência)1 envelope de gelatina em pó...</p>
                    <a href="ReceitasCriancas/GelatinaColorida.php" class="text-black">Continuar Lendo</a>  
                </div>
                </div>
              </div>
          </div>
    </main>
    <!-- rodapé -->
  <?php include 'footer_novo.php';?>  
</body>
<script src="Js/estilo.js"></script>
</html>