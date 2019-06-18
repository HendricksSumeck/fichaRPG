<?php
    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $data = json_decode(file_get_contents("php://input"), true);
    
    $email = $data["email"];
    $senha = $data["senha"];

    $banco = new Banco();
    $login = new Login($data['email'], $data['senha']);
    
?>
