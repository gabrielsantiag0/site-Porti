<?php 
    if(isset($_SESSION["dmellitus"])){
        unset($_SESSION["dmellitus"]);
        header('location: ../../index.php');

    }else{

        session_destroy();
        header('location: ../../index.php');
        exit;
    }


?>