<?php 
    session_name('dmellitus');
    if(!isset($_SESSION)){
        session_start();
        if(isset($_GET['logout'])){
            unset($_SESSION['nome']);
            session_destroy();
            header('location: ../index.php');
            exit;
            
        
        }
    }
    // segurança digital..

    //verificar se o usuario esta logado na sessão
    if(!isset($_SESSION['nome'])){
        $nomeuser = $_SESSION['nome'];
        $_SESSION = $nomeuser;
        //se nao existir, redirecionamos a sessão por segurança
        header('location: login/login.php');
        exit;
    }
    $nome_da_sessao = session_name();
    if(!isset($_SESSION['nome_da_sessao'])
        or ($_SESSION['nome_da_sessao']!=$nome_da_sessao)
    )

?>