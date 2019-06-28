<?php
    require_once("../classes/banco.php");
    require_once("../classes/login.php");
    $data = json_decode(file_get_contents("php://input"), true);

    $email = $data["emailLog"];
    $senha = $data["senhaLog"];
    
    $banco = new Banco();
    $bdEm = $banco->verificaEmail($email);

    if($email == $bdEm['email']){
        $login = new Login($email, $senha);
        $logar = $banco->verificaLogin($login);
        if($logar['email'] == NULL){

            $data['erro']['erroLog'] = 2;//Senha errada
        }else{
            $data['erro']['erroLog'] = 3;//Logado com sucesso
        }
    }else{
        $data['erro']['erroLog'] = 1;//Email inexistente
    }

    $status = json_encode($data);
    echo $status;
?>
