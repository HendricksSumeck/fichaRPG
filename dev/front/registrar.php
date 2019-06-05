
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--LINK CSS-->
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css"/>

	<!--LINK DO BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--SCRIPTS JS DO BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
</head>

<body id="inicio">
   
    
    <div class="container"></div>
        <div class="col-md-10">
            <form id="form-cadastro" name="formCadastro" action="../back/sessoes/cadastrar.php" method="post">
                <h2>Cadastro de usuário</h2>
                <div class="form-group">
                    <label for="nomeUsuario">Nome de usuário: </label>
                    <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control" placeholder="Dragon">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="Cademail" class="form-control" placeholder="dragon5e@dragon.com">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Informe sua senha">
                    <label for="confSenha">Confirmar senha:</label>
                    <input type="password" name="confSenha" id="" class="form-control" placeholder="Confirme sua senha">
                </div> 
                <button type="submit" class="btn btn-danger">Confirmar</button>             
                <a href="inicio.php" type="button" class="btn btn-danger" id="bCadastrar">Cancelar</a>
                
            </form>
    </div>



</body>
</html>