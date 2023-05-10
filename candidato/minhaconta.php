<?php

include "acesso_com.php";


    include '../conexao/conn.php';
    $consulta = "SELECT * FROM usuarios";
    $con = $conn->query($consulta);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/conta.css">
    <title>Document</title>
</head>
<body>
    <?php include 'menu_candidato.php'?>
    <?php include 'superior.php'?>
    <?php include 'subsuperior.php'?>
    
    <table>
        <?php while($dado = $con->fetch_assoc()){?>
        <tr>
            <td><?php echo $dado['nome'];?></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <?php }?>
    </table>
        <div class="colunac2">
        <div class="card1">
                <div class="title">
                    <h1>Nome</h1>
                </div>
                <div class="conteudos">
                    <div class="texto">
                        <p>Email:</p>
                    </div>
                    <div class="texto">
                        <p>nascimento:</p>
                    </div>
                    <div class="texto">
                        <p>Telefone:</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>