<?php
 
    class Banco{
        private $cadastro;
        private $login;
        
        //Cadastro
        public function verificarRegistro(Cadastro $cadastro){
            require("back/conexao/conexao.php");
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
        
        
        
        
        
        
        
    }




?>