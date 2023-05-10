<?php 
    $termo = $_POST['termo'];
    if($termo = 'termo'){

    }else{
      echo "<script>alert('Termos de uso não prenchido');</script>";
    }


// if(mysqli_insert_id($conn)){
//     echo "<script>alert('cadastro concluido');</script>";
// }
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Formulário</title>
</head>

<body class="body">
    <div class="container-1">
        <div class="form-image">
            <img src="../../Img/img_cadastro2.svg" alt="">
        </div>
        <div class="form">
            <form action="cadastro.php" method="post" name="form_usuario_insere"
                    enctype="multipart/form-data" id="form_usuario_insere1" >
                <div class="form-header">
                    <div class="title">
                        <h1>Informações</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group1">
                    <div class="input-box">
                        <label for="remedio">Último remédio usado</label>
                        <input id="remedio" type="text" name="remedio"  placeholder="Nome do remédio" required >
                    </div>
                    <div class="input-box">
                        <label for="insulina">Insulina utilizada</label>
                        <input id="insulina" type="text" name="insulina"  placeholder="Nome do remédio" required >
                    </div>
                    <div class="input-box">
                        <label for="glicemia">Último valor de Glicemia</label>
                        <input id="glicemia" type="text" name="glicemia"  placeholder="Nome do remédio" required >
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-group" >
                        <div class="gender-input1">
                            <input id="termo" type="radio" name="genero" value="termo">
                            <label for="termo">Concordo com os &nbsp;<a href="" data-toggle="modal" data-target="#modalExemplo2" class="tamn">Termos de uso</a> </label>
                        </div>
                        <div class="modal fade" id="modalExemplo2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        <h1>Diabete Tipo 2</h1>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="container">
                                        <p class="fs-5 modalfont">
                                          &nbsp; &nbsp;  O tipo 2 aparece quando o organismo não consegue usar adquadamente a insulina que produzir;
                                            ou não produz insulina suficiente para controla a taxa de glicemia. Cerca de 90%
                                            das pessoas com diabetes têm o Tipo 2. Ele se manifesta mais frequentemente em adultos,
                                            mas crianças também podem apresentar. Dependendo da gravidade, ele pode ser controlado com atividade física
                                            e planejamento alimentar. Em outros casos, exige o uso de insulina e/ou outros medicamentos para controlar a glicose.
                                        </p>
                                        <p class="text-start mt-3 textoTipo fs-5 ms-3 d-flex"><b>
                                                Saiba mais sobre a diabete:
                                            </b>&nbsp;
                                            <a class="text-primary" id="links" href="https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/d/diabetes">diabetes.gov</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    </div>
                    
                </div>
            <input type="submit" name="enviar" id="enviar"  class="continue-button" value="Cadastrar">

            </form>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>