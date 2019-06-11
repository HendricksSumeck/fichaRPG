Vue.component('modal', {
    template: '#modalRegistro'
  })

Vue.component('alerta-sucesso', {
  template: '#alertaSucesso'
}
)

  // start app
  new Vue({
    el: '#app',
    data: {
      showModal: false,
      alerta: false,
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
          senha: this.senha,
          erro: 0
        })
        .then(function (response){  
          local.saida = response.data;
          //console.log(local.saida);
          if(local.saida.erro == 1){
            console.log(local.saida.erro);
          }
          if(local.saida.erro == 2){
            console.log(local.saida.erro);
          }
          if(local.saida.erro == 3){
            local.showModal = false;
            local.alerta = true;
            setTimeout(function(){ 
              local.alerta = false; 
            }, 7000);
          }          
          //console.log(local.saida);
          //console.log(response);
        })
        .catch(function (error) {
          console.log(error);
        });
      }
    }

  })



