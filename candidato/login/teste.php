<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="collapse navbar-collapse" id="menupublico">
            <ul class="nav navbar-nav navbar-right">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExemplo">
                Faça sua reserva
            </button>
            <!-- modal button -->
                                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                 <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel"><h1>Regras de pedidos</h1></h5>
                                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                                                        <span aria-hidden="true">&times;</span>
                                                                     </button>
                                                            </div>
                                                                 <div class="modal-body">
                                    
                                                                    <p>
                                                                        1- O pedido deve ser feito com 48horas de antecedencia e no maximo 90 dias. <br>
                                                                        2-  Apenas um pedido por CPF. <br>
                                                                        3- O cliente deve apresentar o documento na entrada do restaurante.
                                                                    </p>
                                                                </div>
                                                             <div class="modal-footer">
                                                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                  <a href="login_cliente.php"><button type="button" class="btn btn-primary">Continuar</button></a>
                                                            </div>
                                                         </div>
                                                    </div>
                                                  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>