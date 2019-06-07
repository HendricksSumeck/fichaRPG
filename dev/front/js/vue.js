Vue.component('modal', {
    template: '#modalRegistro'
  })
  
  // start app
  new Vue({
    el: '#app',
    data: {
      showModal: false,
      usuario: '',
      email: '',
      senha: '',
      saida: {},
      erro: ''
    },

    methods: {
      cadastrar: function(){
        console.log("teste");
      },

      cadastrarUsuario: function(){
        var local = this;
        axios.post('../back/sessoes/cadastrar.php', {
          usuario: this.usuario,
          email: this.email,
          senha: this.senha
        })
        .then(function (response){  
          local.saida = response.data;
          console.log(local.saida);
          //console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }

  })

