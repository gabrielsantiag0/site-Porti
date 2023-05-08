<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/ReceitasCriancas.css">
    <title>RECEITAS DE REFEIÇÕES</title>
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
                <a href="./ReceitasRefeicoes/MaminhaAoMolhodeErvas.php">
                  <img src="Img/MaminhaAoMolhoDeErvas.png" class="card-img-top" alt="imagem da maminha ao molho de Ervas">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Maminha ao molho de ervas</h5>
                  <p class="card-text">Rendimento: 10 porções Ingredientes1 maminha em peça1 colher (chá) de sal2 dentes de alho amassados1 colher (sopa) de azeite de…</p>
                  <a href="ReceitasRefeicoes/MaminhaAoMolhodeErvas.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitasRefeicoes/RisotoDoMar.php">
                  <img src="Img/RisotoDoMar.jpg" class="card-img-top" alt="imagem do risoto do mar">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Risoto do mar</h5>
                  <p class="card-text">Rendimento: 4 porções Ingredientes 1 colher (sopa) de azeite de oliva200 g de filé de badejo cortado em tiras1 cebola...</p>
                  <a href="ReceitasRefeicoes/RisotoDoMar.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitasRefeicoes/NhoqueAoMolho.php">
                  <img src="Img/NhoqueAoMolhoMediterrâneo.jpg" class="card-img-top" alt="imagem do nhoque ao molho mediterrâneo">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Nhoque ao molho mediterrâneo</h5>
                  <p class="card-text">Rendimento: 6 porções Ingredientes Massa 4 xícaras (chá) de mandioquinha cozida e amassada4 claras2 colheres (sopa) de margarina cremosa sem...</p>
                  <a href="ReceitasRefeicoes/NhoqueAoMolho.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./ReceitasRefeicoes/RavióliDeCúrcuma.php">
                  <img src="img/RavióliDeúrcumaComAlho-Poró.jpg" class="card-img-top" alt="imagem do Ravióli de cúrcuma com alho-poró">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Ravióli de cúrcuma com alho-poró</h5>
                  <p class="card-text">Rendimento: 4 porções Ingredientes Massa 2 xícaras (chá) de farinha de trigo2 ovos1 colher (sopa) de azeite de oliva1 colher...</p>
                  <a href="ReceitasRefeicoes/RavióliDeCúrcuma.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card">
                  <a href="./ReceitasRefeicoes/CharutinhoCaipira.php">
                    <img src="img/Charutinho caipira.jpg" class="card-img-top" alt="imagem do charutinho caipira">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Charutinho caipira</h5>
                    <p class="card-text">Rendimento: 6 porções Ingredientes 6 folhas de couve-manteiga grandes Recheio 200 g de carne moída magra1/2 cebola ralada1/2 lata de…</p>
                    <a href="ReceitasRefeicoes/CharutinhoCaipira.php" class="text-black">Continuar Lendo</a>  
                </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <a href="./ReceitasRefeicoes/EstrogonofeDeFrango.php">
                    <img src="img/EstrogonofeDeFrangoComBerinjela.jpg" class="card-img-top" alt="imagem do estrogonofe de frango com berinjela">
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Estrogonofe de frango com berinjela</h5>
                    <p class="card-text">Rendimento: 7 porções -  Ingredientes -  300 g de filé de frango cortado em tiras1 colher (sopa) de sal1 pitada…</p>
                    <a href="ReceitasRefeicoes/EstrogonofeDeFrango.php" class="text-black">Continuar Lendo</a>  
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