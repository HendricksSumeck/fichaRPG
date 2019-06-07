<?php
    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $data = json_decode(file_get_contents("php://input"), true);

    $usuario = $data["usuario"];
    $email = $data["email"];
    $senha = $data["senha"];
    
    $banco = new Banco();
    $cadastro = new Cadastro($_POST['usuario'], $_POST['senha'], $_POST['email']);
    $banco->cadastrarUsuario($cadastro);
?>