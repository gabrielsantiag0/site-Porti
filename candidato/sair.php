<?php 

if(isset($_GET['logout'])){
    unset($_SESSION['nome']);
    session_destroy();
    header('location: ../index.php');

}

?>