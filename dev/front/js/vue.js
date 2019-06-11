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

  // start app
  new Vue({
    el: '#app',

    created() {
      this.debouncedGetusuario = _.debounce(this.getUsuario, 1000);
      this.debouncedGetemail = _.debounce(this.getEmail, 1000);
    },

    data: {
      showModal: false,
      alerta: false,
      alUs: 0,
      alEm: 0,
      usuario: '',
      email: '',
      senha: '',
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
          local.alUs = local.saida.erro.erroUsu;
          if(!local.usuario){
            local.alUs = 0;  
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
          local.alEm = local.saida.erro.erroEma;
          if(!local.email){
            local.alEm = 0;  
          }
          //console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
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
      }
    }
  })



