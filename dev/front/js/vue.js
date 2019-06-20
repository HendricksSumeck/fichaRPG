Vue.component('modal', {
    template: '#modalRegistro'
  })

Vue.component('alerta-sucesso', {
  template: '#alertaSucesso'
})

Vue.component('alerta-valido', {
  template: '#alertaValido'
})

Vue.component('alerta-invalido', {
  template: '#alertaInvalido'
})

Vue.component('alerta-senha', {
  template: '#senhaIncorreta'
})


  // start app
  new Vue({
    el: '#app',

    created() {
      this.debouncedGetusuario = _.debounce(this.getUsuario, 1000);
      this.debouncedGetemail = _.debounce(this.getEmail, 1000);
      this.debouncedValidasenha = _.debounce(this.validaSenha, 1000);
      this.debouncedValidaconfsenha = _.debounce(this.validaConfsenha, 1000);
      this.debouncedHabilitabotao = _.debounce(this.habilitaBotao, 1100);
    },

    data: {
      showModal: false,
      alerta: false,
      alertas: {alUs: 0, alEm: 0, alSe: 0, alCose: 0},
      alUs: 0,
      alEm: 0,
      alSe: 0,
      validacao: true,
      usuario: '',
      email: '',
      senha: '',
      confSenha: '',
      saida: {},
      erro: {erroCad: '', erroUsu: '', erroEma: ''},
      emailLog: '',
      senhaLog: ''
    },

    methods: {
      habilitaBotao: function(){
        if(this.alertas.alUs == 1 && this.alertas.alEm == 1 &&  this.alertas.alSe == 1 &&  this.alertas.alCose == 1){
          this.validacao = false;
          console.log('Teste');
        }else{
          this.validacao = true;
        }
      },
      getUsuario: function(){
        var local = this;
        axios.post('../back/sessoes/verificaUsuario.php', {
          usuario: this.usuario,
          erro: this.erro
        })
        .then(function (response){
          local.saida = response.data;
          local.alertas.alUs = local.saida.erro.erroUsu;
          if(!local.usuario){
            local.alertas.alUs = 3;  
          }
          //console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      },

      getEmail: function(){
        var local = this;
        axios.post('../back/sessoes/verificaEmail.php', {
          email: this.email,
          erro: this.erro
        })
        .then(function (response){
          local.saida = response.data;
          local.alertas.alEm = local.saida.erro.erroEma;
          if(!local.email){
            local.alertas.alEm = 3;  
          }
          //console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      },

      validaSenha: function(){
        if(!this.senha){
          this.alertas.alSe = 3;
        }
        else if(this.senha.length < 8){
          this.alertas.alSe = 2;
        }else
          this.alertas.alSe = 1;   
      },

      validaConfsenha: function(){
        if(!this.senha | !this.confSenha){
          this.alertas.alCose = 3;
        }else if(this.senha != this.confSenha){
          this.alertas.alCose = 2;
        }else
          this.alertas.alCose = 1;
      },

      cadastrarUsuario: function(){
        var local = this;
        axios.post('../back/sessoes/cadastrar.php', {
          usuario: this.usuario,
          emailLog: this.email,
          senhaLog: this.senha,
          erro: this.erro
        })

        .then(function (response){  
          local.saida = response.data;
          //console.log(local.saida);

          local.showModal = false;
          local.alerta = true;
          setTimeout(function(){ 
            local.alerta = false; 
            local.usuario = "";
            local.email = "";
            local.senha = "";
            local.confSenha = "";
          }, 5000);
       
          //console.log(local.saida);
          //console.log(response);
        })

        .catch(function (error) {
          console.log(error);
        });
      },

      loginUsuario: function(){
        var local = this;
        axios.post('../back/sessoes/logar.php', {
          email: this.email,
          senha: this.senha,
          erro: this.erro
        })

        .then(function (response){  
          local.saida = response.data;
          console.log(local.saida);
          //window.location.assign("inicio.php");
        })

        .catch(function (error) {
          console.log(error);
        });
      }
    },

    watch: {
      usuario: function() {
        this.debouncedGetusuario();
        this.debouncedHabilitabotao();
      },
      email: function(){
        this.debouncedGetemail();
        this.debouncedHabilitabotao();
      },
      senha: function(){
        this.debouncedValidasenha();
        this.debouncedValidaconfsenha();    
        this.debouncedHabilitabotao();    
      },
      confSenha: function(){
        this.debouncedValidaconfsenha();
        this.debouncedHabilitabotao();
      }
    }
  })



