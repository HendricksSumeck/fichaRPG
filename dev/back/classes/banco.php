<?php
 
    class Banco{
        private $cadastro;
        private $login;
        
        //Cadastro
        public function verificaEmail($email){
            require("../conexao/conexao.php");
            try{
                $sql = "SELECT email FROM Login WHERE email = :email";
                $select = $conexao->prepare($sql);
                $select->bindValue(":email", $email);
                $select->execute();
                $select = $select->fetch(PDO::FETCH_ASSOC);
                return $select;
            }catch(PDOException $erro){
                return $erro;
            }
        }
        
        public function verificaUsuario($usuario){
            require("../conexao/conexao.php");
            try{
                $sql = "SELECT usuario FROM Login WHERE usuario = :usuario";
                $select = $conexao->prepare($sql);
                $select->bindValue(":usuario", $usuario);
                $select->execute();
                $select = $select->fetch(PDO::FETCH_ASSOC);
                return $select;
            }catch(PDOException $erro){
                return $erro;
            }
        }

        public function cadastrarUsuario(Cadastro $cadastro){
            require("../conexao/conexao.php");
            try{
                $sql= "INSERT INTO `login`(`email`, `usuario`, `senha`) VALUES (:email, :usuario, :senha)";
                $select = $conexao->prepare($sql);
                $select->bindValue(":email", $cadastro->getEmail());
                $select->bindValue(":usuario", $cadastro->getUsuario());
                $select->bindValue(":senha", $cadastro->senhaHash($cadastro->getSenha()));
                $select->execute(); 
                return 1;
            }catch(PDOException $erro){
                return 2;
            }   
        }
        
        public function verificaLogin($email, $senha){
            require("../conexao/conexao.php");
            try{
                $sql = "SELECT id_login, email FROM login WHERE email = :email AND senha = :senha";
                $select = $conexao->prepare($sql);
                $select->bindValue(":email", $email);
                $select->bindValue(":senha", $senha);
                $select->execute();
                //$select = $select->fetch(PDO::FETCH_ASSOC);
                echo $contar = $select->rowCount();
                if($contar > 0 ){
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $_SESSION['usuariolog'] = $email;
                    $_SESSION['senhalog'] = $senha;
                    header("refresh: 1, ../../front/inicio.php");
                    exit; 
                }else{
                    echo('os dados estao incorretos');
                }
                
            }catch(PDOException $e){
                return $e;
            }
        }
    }




?>