<?php 
    session_name('dmellitus');
    if(!isset($_SESSION)){
        session_start();
    }
    // segurança digital..

    //verificar se o usuario esta logado na sessão
    if(!isset($_SESSION['nome'])){
        //se nao existir, redirecionamos a sessão por segurança
        header('location: login/login.php');
        exit;
    }
    $nome_da_sessao = session_name();
    if(!isset($_SESSION['nome_da_sessao'])
        or ($_SESSION['nome_da_sessao']!=$nome_da_sessao)
    ){
        session_destroy();
        header('location: login/login.php');
        exit;
    }
 
?>