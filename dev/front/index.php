<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--LINK CSS-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css"/>

	<!--LINK DO BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!--SCRIPTS JS DO BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
</head>

<body id="inicio">
    <div id="entrar" class="">
        <a href= "/web/Novapasta/fichaRPG/dev/login/"></a>
        <a href= "/web/Novapasta/fichaRPG/dev/registrar/"></a>

    </div>
    

    
<div class="container" id="containerLogin">
    <div class="row">
        <div class="col-md-3">
            <form id="login">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email">
              </div>

              <div class="form-group">
                <label for="pwd">Senha:</label>
                <input type="password" class="form-control" id="pwd">
              </div>

            <button href="#" type="submit" class="btn btn-danger">Entrar</button>
                
            </form>
        </div>
    </div>
</div>

 <!-- app -->
            <div id="app">
                <button  class="btn btn-danger" id="show-modal" @click="showModal = true">Cadastrar</button>
                <!-- use the modal component, pass in the prop -->
                    <modal v-if="showModal" @close="showModal = false">
                        <h3 slot="header">Cadastro de usuario</h3>
                        <div slot="body">
                            <form name="formCadastro" action="../back/sessoes/cadastrar.php" method="post">
                                <div class="form-group">
                                    <label for="nomeUsuario">Nome de usuário: </label>
                                    <input type="text" name="usuario" id="nomeUsuario" class="form-control" placeholder="Dragon">
                                    <label for="email">Email:</label>
                                    <input type="text" name="email" id="Cademail" class="form-control" placeholder="dragon5e@dragon.com">
                                    <label for="senha">Senha:</label>
                                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Informe sua senha">
                                    <label for="confSenha">Confirmar senha:</label>
                                    <input type="password" name="confSenha" id="" class="form-control" placeholder="Confirme sua senha">
                                </div> 
                                <button type="submit" class="btn btn-danger">Confirmar</button>             
                                <button class="btn btn-danger"><a href="index.php">Cancelar</a></button>         
                            </form>
                        </div>
                </modal>
             </div>

               
<template id="modalRegistro">
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">
                    <div class="modal-header">
                        <slot name="header">
                            default header
                        </slot>
                    </div>
                    <div class="modal-body">
                        <slot name="body">
                            default body
                        </slot>
                    </div>
                    <div class="modal-footer">
                        <slot name="footer">
                            default footer
                            <button class="modal-default-button" @click="$emit('close')">
                                Fechar
                            </button>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
  </transition>
</template>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="js/vue.js"></script>
</body>
</html>