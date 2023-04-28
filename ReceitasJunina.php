<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/ReceitasCriancas.css">
    <title>RECEITAS DE LANCHES</title>
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
                <a href="./Receitasjuninas/QuentãoDeFrutas.php">
                  <img src="Img/QuentãoDeFrutas.jpg" class="card-img-top" alt="imagem Quentão de frutas">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Quentão de frutas</h5>
                  <p class="card-text">Rendimento: 6 porções Ingredientes2 canelas em pau2 laranjas cortadas em rodelas1 xícara (chá) de morango4 fatias de abacaxi4 cravos-da-índia1 pedaço...</p>
                  <a href="Receitasjuninas/QuentãoDeFrutas.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./Receitasjuninas/PaçocaSalgadaDePinhão.php">
                  <img src="Img/PaçocaSalgadaDePinhãoEAmendoim.jpg" class="card-img-top" alt="imagem paçoca salgada de pinha e amendoim">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Paçoca salgada de pinhão e amendoim</h5>
                  <p class="card-text">Rendimento: 10 porções Ingredientes1 cebola picada1 colher (sopa) de azeite de oliva2 xícaras (chá) de pinhão cozido1 xícara (chá) de…</p>
                  <a href="Receitasjuninas/PaçocaSalgadaDePinhão.php" class="text-black">Continuar Lendo</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <a href="./Receitasjuninas/CurauDeCenouraEMilho.php">
                  <img src="Img/CurauDeCenouraEMilho.jpg" class="card-img-top" alt="imagem curau de cenoura e milho">
                </a>
                <div class="card-body">
                  <h5 class="card-title">Curau de cenoura e milho</h5>
                  <p class="card-text">Rendimento: 8 porções Ingredientes1 cenoura média cozida1 lata de milho verde em conserva escorrido3 xícaras (chá) de leite desnatado½ xícara…</p>
                  <a href="Receitasjuninas/CurauDeCenouraEMilho.php" class="text-black">Continuar Lendo</a>
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