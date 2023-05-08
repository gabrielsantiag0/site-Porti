<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/superior.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Document</title>
</head>
<body>
    <div class="col">
            <div class="ajs avisos">
                <span>Aviso</span>
            </div>
            <div class="ajs meutratamento">
                <span>Meu Tratamento</span>
            </div>
            <div class="ajs conta">
                <i class="fas fa-user-alt"></i>
                <span>Olá <?php echo($_SESSION['nome']); ?>!<br> 
                    Minha Conta
                </span>
            </div>
    </div>
</body>
</html>