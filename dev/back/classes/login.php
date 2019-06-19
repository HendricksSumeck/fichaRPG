<?php 
    class Login extends Cadastro{
        
        function __construct($email,$senha){
            $this->email = $email;
            $this->senha = $senha;
        }
        
        //Funções
            
        /*public function login(){
            $banco = new Banco();
            $var = $banco->verificaLogin($this);
            if($var['email'] == NULL){
                header('location:');
                exit;
            }else{
                $this->setId_login($var['id_login']);
                $this->logar();
            }
        }*/
        
        public function logar(){
            $_SESSION['email'] = $this->email;
            $_SESSION['id_login'] = $this->id_login;
            header('location:');
            exit;
        }




    }
    
    ?>