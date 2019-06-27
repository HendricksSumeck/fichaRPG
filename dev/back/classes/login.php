<?php
    class Login{
        //Var
        public $email;
        public $senha;

        function __construct($email,$senha){
            $this->email = $email;
            $this->senha = $senha;
        }

    }

?>
