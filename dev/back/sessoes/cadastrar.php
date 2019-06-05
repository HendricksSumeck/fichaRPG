<?php

    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $cadastro = new Cadastro($email, $usuario, $senha);
    
?>