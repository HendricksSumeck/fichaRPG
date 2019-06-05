<?php

class Cadastro{
    //Var
    public $id_login;
    public $usuario;
    public $senha;
    public $email;

    //Construtor
    
    function __construct($usuario,$senha,$email){
        $this->usuario = $usuario;
        $this->senhaHash = $senha;
        $this->email = $email;
    }
    
    //Funções
    
    //Criptografia da senha
    public function senhaHash($senha){
        $this->setSenha(md5($senha));
    }
    
    //Valida email e usuario
    public function validaCadastro(Banco $banco){
        $select = $banco->verificaRegistro($this);
        
        if($select['email']){
            return "EMAIL ERRO";
        }
        if($select['usuario']){
            return "USUARIO ERRO";
        }
    }
    
    //Funções get e set
    
    public function getId_login(){
        return $this->id_login;
    }
    
    public function setId_login($id_login){
        $this->id_login = $id_login;
    }
    
    public function getUsuario(){
        return $this->usuario;
    }
    
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha($senha){
        $this->senha = $senha;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = email;
    }
}






?>