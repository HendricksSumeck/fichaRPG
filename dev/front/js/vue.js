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
    },

    data: {
      showModal: false,
      alerta: false,
      alertas: {alUs: 0, alEm: 0, alSe: 0, alCose: 0},
      alUs: 0,
      alEm: 0,
      alSe: 0,
      usuario: '',
      email: '',
      senha: '',
      confSenha: '',
      saida: {},
      erro: {erroCad: '', erroUsu: '', erroEma: ''}
    },

    methods: {
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
            local.alertas.alUs = 0;  
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
            local.alertas.alEm = 0;  
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
          email: this.email,
          senha: this.senha,
          erro: this.erro
        })

        .then(function (response){  
          local.saida = response.data;
          //console.log(local.saida);

          if(local.alUs == 1 && local.alEm == 1){
            local.showModal = false;
            local.alerta = true;
            setTimeout(function(){ 
              local.alerta = false; 
              local.usuario = "";
              local.email = "";
              local.senha = "";
            }, 5000);
          }          
          //console.log(local.saida);
          //console.log(response);
        })

        .catch(function (error) {
          console.log(error);
        });
      }
    },

    watch: {
      usuario: function() {
        this.debouncedGetusuario();
      },
      email: function(){
        this.debouncedGetemail();
      },
      senha: function(){
        this.debouncedValidasenha();
        this.debouncedValidaconfsenha();        
      },
      confSenha: function(){
        this.debouncedValidaconfsenha();
      }
    }
  })



