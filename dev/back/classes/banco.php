<?php
 
    class Banco{
        private $cadastro;
        private $login;
        
        //Cadastro
        public function verificaRegistro(Cadastro $cadastro){
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
        
        public function cadastrarUsuario(Cadastro $cadastro){
            require("back/conexao/conexao.php");
            $email = $_POST["email"];
            $usuario = $_POST["usuario"];
            $senha = $_POST["senha"];
            //prepara o cadastro
            $inserir= $conexao->prepare("INSERT INTO Login(email, usuario, senha) VALUES (:email, :usuario, :senha)");
            $inserir->bindValue(":email",$email);
            $inserir->bindValue(":usuario",$usuario);
            $inserir->bindValue(":senha",$senha);
            //valida o cadastro
            $validar=$conexao->prepare("SELECT * FROM Login WHERE email=?");
            $validar->execute(array($email));
            if($validar->rowCount() == 0):
                //executa o cadastro
                $inserirserir->execute();
            else:
                echo "ja existe";
            endif;
        }
    }




?>