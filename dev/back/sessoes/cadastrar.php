<?php
    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $data = json_decode(file_get_contents("php://input"), true);

    $usuario = $data["usuario"];
    $email = $data["email"];
    $senha = $data["senha"];
    
    $banco = new Banco();
    $cadastro = new Cadastro($data['usuario'], $data['senha'], $data['email']);
    
    $bdUs = $banco->verificaUsuario($cadastro);
    $bdEm = $banco->verificaEmail($cadastro);

    //Erro 1 usuario
    if($usuario == $bdUs['usuario']){
        $data['erro'] = 1;
    }
    //Erro 2 email
    elseif($email == $bdEm['email']){
        $data['erro'] = 2;
    }
    //3 tudo valido
    else{
        $erro = $banco->cadastrarUsuario($cadastro);
        $data['erro'] = $erro;
    }

    $status = json_encode($data);
    echo $status;
?>