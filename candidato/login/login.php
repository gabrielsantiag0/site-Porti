<?php 
    include '../../conexao/conn.php';

    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nome  = $_POST['nome'];
        $login = $conn->query("select * from usuarios where nome = '$nome' and email = '$email' and senha = '$senha'");
        $rowLogin = $login->fetch_assoc();
        $Row = mysqli_num_rows($login);

        if(!isset($_SESSION)){
            $sessaoAntiga = session_name('dmellitus');
            session_start();
            $session_name_new =  session_name();
        }
        if(($Row)>0){  
            $_SESSION['nome'] = $nome;
            $_SESSION['nivel'] = $rowLogin['nivel'];
            $_SESSION['nome_da_sessao'] = session_name();
            if($rowLogin['nivel']=='USE'){
                echo "<script>window.open('../index.php','_self')</script>";
            }   
        }

    }
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form">
          <div class="form-image">
            <img src="../Img/logoPequena.png" alt="">
          </div>
            <form action="login.php" method="post" name="" id="" >
                <div class="form-header">
                    <div class="title">
                        <h1>Login</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="cadastro.php">Cadastra-se</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">nome</label>
                        <input id="nome" type="name" name="nome" placeholder="Obs: apenas seu primeiro nome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email"  placeholder="Digite seu email" required >
                    </div>
                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                </div>
                <input type="submit" name="entrar" id="entrar" class="continue-button" value="Entrar">
            </form>
        </div>
    </div>
</body>