<?php
 
    class Banco{
        private $cadastro;
        private $login;
        
        //Cadastro
        public function verificaRegistro(Cadastro $cadastro){
            require_once("../conexao/conexao.php");
            try{
                $sql = "SELECT email, usuario FROM Login WHERE email = :email OR usuario = :usuario";
                $select = $conexao->prepare($sql);
                $select->bindValue(":email",$cadastro->getEmail());
                $select->bindValue(":usuario",$cadastro->getUsuario());
                $select->execute();
                $select = $select->fetch(PDO::FETCH_ASSOC);
                return $select;
            }catch(PDOException $erro){
                return $erro;
            }
        }
        
        public function cadastrarUsuario(Cadastro $cadastro){
            require_once("../conexao/conexao.php");
            //require("../sessoes/cadastrar.php");
            //prepara o cadastro
            $sql= "INSERT INTO `login`(`email`, `usuario`, `senha`) VALUES (:email, :usuario, :senha)";
            $inserir = $pdo->prepare($sql);
            $inserir->bindValue(":email", $cadastro->getEmail());
            $inserir->bindValue(":usuario", $cadastro->getUsuario());
            $inserir->bindValue(":senha", $cadastro->getSenha());
            $inserir->execute();    
        }
    }




?>