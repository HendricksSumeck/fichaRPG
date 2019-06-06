<?php
    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $banco = new Banco();
    $cadastro = new Cadastro($_POST['usuario'], $_POST['senha'], $_POST['email']);
    $banco->cadastrarUsuario($cadastro);
    var_dump($_POST);
?>