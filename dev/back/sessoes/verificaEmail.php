<?php

    require_once("../classes/banco.php");
    require_once("../classes/cadastro.php");
    $data = json_decode(file_get_contents("php://input"), true);

    $email = $data["email"];
    $banco = new Banco();
    $bdEm = $banco->verificaEmail($email);

    if($email == $bdEm['email']){
        $data['erro']['erroEma'] = 2;
    }else{
        $data['erro']['erroEma'] = 1;
    }

    $status = json_encode($data);
    echo $status;
    
?>