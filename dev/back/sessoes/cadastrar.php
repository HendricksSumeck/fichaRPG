<?php
    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $data = json_decode(file_get_contents("php://input"), true);

    $usuario = $data["usuario"];
    $email = $data["email"];
    $senha = $data["senha"];
    
    $banco = new Banco();
    $cadastro = new Cadastro($data['usuario'], $data['senha'], $data['email']);
    $erro = $banco->cadastrarUsuario($cadastro);
    $data['erro'] = $erro;
    
    $status = json_encode($data);
    echo $status;
?>