<?php

    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $data = json_decode(file_get_contents("php://input"), true);

    $usuario = $data["usuario"];
    $banco = new Banco();
    $bdUs = $banco->verificaUsuario($usuario);

    if($usuario == $bdUs['usuario']){
        $data['erro']['erroUsu'] = 2;
    }else{
        $data['erro']['erroUsu'] = 1;
    }

    $status = json_encode($data);
    echo $status;

?>