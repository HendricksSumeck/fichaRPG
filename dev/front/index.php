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
  
<div class="container" id="containerLogin">
    <div class="row">
        <div class="col-md-3" id="app">
            <form id="login">
              <div class="form-group">
                <label for="email">Email:</label>
                <input class="tamanho_div" type="email" class="form-control">
              </div>

              <div class="form-group">
                <label for="pwd">Senha:</label>
                <input class="tamanho_div" type="password" class="form-control">
              </div>

            <span class="btn btn-danger">Entrar</span>  
            <span class="btn btn-danger" id="show-modal" @click="showModal = true">Cadastrar</span>
            <alerta-sucesso v-if="alerta" class="tamanho_div2">
                {{usuario}}: Cadastrado com sucesso
            </alerta-sucesso>
                <div>
                <!-- use the modal component, pass in the prop -->
                <modal v-if="showModal" @close="showModal = false">
                        <h3 slot="header">Cadastro de usuario</h3>
                        <div slot="body">
                            <form name="formCadastro" action="../back/sessoes/cadastrar.php" method="post">
                                <div class="form-group">
                                    <label class="label_cadastro" for="nomeUsuario">Nome de usuário: </label>
                                    <alerta-valido v-if="alUs == 1"></alerta-valido>
                                    <alerta-invalido v-if="alUs == 2"></alerta-invalido>
                                    <input type="text" v-model="usuario" id="nomeUsuario" class="form-control" placeholder="Dragon">                                   
                                    <label class="label_cadastro" for="email">Email:</label>
                                    <alerta-valido v-if="alEm == 1"></alerta-valido>
                                    <alerta-invalido v-if="alEm == 2"></alerta-invalido>
                                    <input type="text" v-model="email" id="Cademail" class="form-control" placeholder="dragon5e@dragon.com">
                                    <label class="label_cadastro" for="senha">Senha:</label>
                                    <input type="password" v-model="senha" id="senha" class="form-control" placeholder="Informe sua senha">
                                    <label class="label_cadastro" for="confSenha">Confirmar senha:</label>
                                    <input type="password" name="confSenha" id="" class="form-control" placeholder="Confirme sua senha">
                                </div>
                                <span @click="cadastrarUsuario" class="btn btn-danger">Confirmar</span>              
                            </form>
                        </div>
                </modal>
             </div>             
            </form>            
        </div>
    </div>
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
                            <span class="modal-default-button btn btn-danger" @click="$emit('close')">
                                Fechar
                            </span>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
  </transition>
</template>

<template id="alertaSucesso">
    <div class="alert alert-success" role="alert">                
        <slot>Nome: <slot>
    </div>
</template>

<template id="alertaValido">
    <img class="check" src="https://img.icons8.com/color/48/000000/ok.png">
</template>

<template id="alertaInvalido">
    <img class="check" src="https://img.icons8.com/flat_round/48/000000/cancel.png">      
</template>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.13.1/lodash.min.js"></script>
<script src="js/vue.js"></script>
</body>
</html>