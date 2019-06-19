<?php
ob_start();
session_start();

    require_once("../../front/index.php");
    //require("../../back/classes/banco.php")
    
    $banco = new Banco();
    if(isset($_SESSION['usuariolog']) && (isset($_SESSION['senhalog']))){
        header("location:index.php");
        exit;
    }

    if(isset($_POST['logar'])){
        $email = trim(strip_tags($_POST['email']));
        $senha = trim(strip_tags($_POST['senha']));
        
        $resultado = $banco->verificaLogin($email, $senha);
    }
    
    $status = json_encode($data);
    echo $status;
    
?>
