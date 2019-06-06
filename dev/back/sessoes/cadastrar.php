<?php
    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $banco = new Banco();
    $cadastro = new Cadastro($_POST['usuario'], $_POST['email'], $_POST['senha']);
    $i = $banco->cadastrarUsuario($cadastro);
?>