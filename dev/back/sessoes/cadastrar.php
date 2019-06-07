<?php
    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $data = json_decode(file_get_contents("php://input"), true);

    $usuario = $data["usuario"];
    $email = $data["email"];
    $senha = $data["senha"];
    
    $banco = new Banco();
    $cadastro = new Cadastro($data['usuario'], $data['senha'], $data['email']);
    var_dump($cadastro);
    //$banco->cadastrarUsuario($cadastro);
?>