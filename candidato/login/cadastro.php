<?php 
     include '../../conexao/conn.php';
    

    if($_POST){  
        $nivel = 'USE';
        $genero = $_POST['genero'];

        if($genero == "masculino"){
            $genero = "M";
        }if($genero == "feminino"){
            $genero = "F";
        }if($genero == "none"){
            $genero = "P";
        }

        $senhap = $_POST['senhap'];
        $senhac = $_POST['senhac'];
        if($senhap == $senhac){
            $senha = $senhap;
        };
    };
    if($_POST){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $nascimento = $_POST['nascimento'];

        $cadastro = "INSERT usuarios
        (nome, sobrenome, email, idade, senha, genero, nivel)
        VALUES
        ('$nome','$sobrenome','$email','$nascimento','$senha','$genero','$nivel')
        ";
            $resultado = $conn->query($cadastro);
    };
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="cadastro.php" method="post" name="form_usuario_insere"
                    enctype="multipart/form-data" id="form_usuario_insere" >
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Primeiro Nome</label>
                        <input id="nome" type="text" name="nome"  placeholder="Digite seu primeiro nome" required >
                    </div>

                    <div class="input-box">
                        <label for="sobrenome">Sobrenome</label>
                        <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="nascimento">Data de nasc.</label>
                        <input id="nascimento" type="date" name="nascimento" placeholder="" required>
                    </div>

                    <div class="input-box">
                        <label for="senhap">Senha</label>
                        <input id="senhap" type="password" name="senhap" placeholder="Digite sua senha" required>
                    </div>


                    <div class="input-box">
                        <label for="senhac">Confirme sua Senha</label>
                        <input id="senhac" type="password" name="senhac" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group" >
                        <div class="gender-input">
                            <label for="feminino">Feminino</label>
                            <input id="genero" type="radio" name="genero" value="feminino">
                        </div>

                        <div class="gender-input"> 
                            <label for="masculino">Masculino</label>
                            <input id="genero" type="radio" name="genero" value="masculino">
                        </div>
                        <div class="gender-input">
                            <label for="none">Prefiro não dizer</label>
                            <input id="genero" type="radio" name="genero" value="none">
                        </div>
                    </div>
                </div>
                <input type="submit" name="enviar" id="enviar"
                             class="continue-button" value="Cadastrar">
            </form>
        </div>
    </div>
</body>

</html>