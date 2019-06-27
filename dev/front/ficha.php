<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--LINK CSS-->
	<link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css"/>

	<!--LINK DO BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <!--SCRIPTS JS DO BOOTSTRAP -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> 
</head>
    
<body id="bodyficha">

<div class="container">
    
    <div class="row" id="parte1">
            <div class="col-md-2">
                <a href="#" id="img-perfil"><img class="card-img-top img-fluid rounded-circle " src="img/paladino.png" width="200px" height="200px" style="border-style: solid"></a>
                <div class="overlay rounded-circle card-img-top img-fluid">
                    <div class="text">Alterar imagem.</div>
                </div>
            </div>
            
            <div class="form-group col-md-2 pt-4">
                <label for="campo1">Nome do personagem:</label>
                <input type="text" class="form-control" id="campo1">
                <div class="row">
                    <div class="col-md-12">
                        <label for="campo1">Pontos de xp</label>
                        <input type="text" class="form-control" id="campo1">
                    </div>
                
                </div>
             </div>

            <div class="form-group col-md-2 pt-4">
                <label for="campo2">Classe e nivel</label>
                <input type="text" class="form-control" id="campo3">
            </div>
            
            <div class="form-group col-md-2 pt-4">
                <label for="campo3">Antecedente</label>
                <input type="text" class="form-control" id="campo3">
            </div>

            <div class="form-group col-md-2 pt-4">
                <label for="campo1">Raça</label>
                <input type="text" class="form-control" id="campo1">
            </div>

            <div class="form-group col-md-2 pt-4">
                <label for="campo1">Tendência</label>
                <input type="text" class="form-control" id="campo1">
            </div>
        </div>  

    <hr align="center" width="1200" size="2" color="white">

<!--<input type="text" class="form-control" id="campo3">-->

      <div class="row">
     
      <div class="form-group col-md-1">
        <label for="campo3">Inspiração</label><br>
        <input type="text" class="form-control " id="campo3">
      </div>
      <div class="form-group col-md-2">
        <label for="campo2">Bônus de proficiencia</label>
        <input type="text" class="form-control" id="campo3">
      </div>

      <div class="col-md-2"> 
        <label for="campo1">Classe ARMD</label><br>
        <input type="text" class="form-control" id="campo1">
      </div>
      <div class="col-md-2">
        <label for="campo1">Iniciativa</label><br>
        <input type="text" class="form-control" id="campo1">
      </div>
      <div class="col-md-2">
        <label for="campo1">Desloc.</label><br>
        <input type="text" class="form-control" id="campo1">
      </div>
    
    <div class="col-md-3">
        <div class="col-md-8"> 
          <label>PV totais</label>
          <input type="text" class="form-control pt-5">
        </div> 
        <div class="col-md-8"> 
            <label for="campo3">PV atuais</label>
            <input type="text" class="form-control" id="campo3">
        </div> 
   
        <div class="col-md-8"> 
            <label for="campo3">PV temporarios</label>
            <input type="text" class="form-control" id="campo3">
        </div>
        
        
    </div>

     </div>
    
    <div class="row">
     <div class="form-group col-md-2">
      <div>
         <label for="campo2">Força</label><br>
         <input type="text" class="form-control col-md-3 offset-md-1" id="campo3"><br><br>
         <label>Pontos</label>
      </div>
      <div>
         <label for="campo2">Destreza</label><br>
         <input type="text" class="form-control col-md-3 offset-md-1" id="campo3"><br><br>
         <label>Pontos</label>
      </div>
      <div>
         <label for="campo2">Constituição</label><br>
         <input type="text" class="form-control col-md-3 offset-md-1" id="campo3"><br><br>
         <label>Pontos</label>
      </div>
      <div>
         <label for="campo2">Inteligência</label><br>
         <input type="text" class="form-control col-md-3 offset-md-1" id="campo3"><br><br>
         <label>Pontos</label>
      </div>
      <div>
         <label for="campo2">Sabedoria</label><br>
         <input type="text" class="form-control col-md-3 offset-md-1" id="campo3"><br><br>
         <label>Pontos</label>
      </div>
      <div>
         <label for="campo2">Carisma</label><br>
         <input type="text" class="form-control col-md-3 offset-md-1" id="campo3"><br><br>
         <label>Pontos</label>
      </div>
    </div>
        
        <div class="col-md-5">
            <table class="table  pt-5">
                <thead>
                    <th scope="col">Testes de resistência</th>
                </thead>
              <tbody>
                <tr>
                  <th><input type="radio"></th>
                  <td><input type="text" class=""></td>
                  <td>Força</td>
                </tr>
                <tr>
                  <th scope="row"><input type="radio"></th>
                  <td><input type="text" class="form-control col-md-3"></td>
                  <td>Destreza</td>
                </tr>
                <tr>
                  <th scope="row"><input type="radio"></th>
                  <td><input type="text" class="form-control col-md-3"></td>
                  <td>Constituição</td>
                </tr>
                 <tr>
                  <th scope="row"><input type="radio"></th>
                  <td><input type="text" class="form-control col-md-3"></td>
                  <td>Inteligência</td>
                </tr>
                 <tr>
                  <th scope="row"><input type="radio"></th>
                  <td><input type="text" class="form-control col-md-3"></td>
                  <td>Sabedoria</td>
                </tr>
                 <tr>
                  <th scope="row"><input type="radio"></th>
                  <td><input type="text" class="form-control col-md-3"></td>
                  <td>Carisma</td>
                </tr>
              </tbody>
            </table>
          </div>    
   
          <!--<div class="row">-->
              <div class="col-md-4">  
                <label for="campo3">TRAÇOS DE PERSONALIDADE</label>
                  <textarea rows="4" cols="49" class="form-control" id="campo3">  
                  </textarea>
                  
                <div class="row"> 
                    <div class="col-md-12">
                        <label for="campo3">IDEAIS</label>
                        <textarea rows="4" cols="49" class="form-control" id="campo3">  
                        </textarea>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-12">
                        <label for="campo3">LIGAÇÕES</label>
                        <textarea rows="4" cols="49" class="form-control" id="campo3">  
                        </textarea>
                    </div>
                </div> 
                <div class="row"> 
                    <div class="col-md-12">
                        <label for="campo3">DEFEITOS</label>
                        <textarea rows="4" cols="49" class="form-control" id="campo3">  
                        </textarea>
                    </div>
                </div> 
              </div>  
          
         <!-- </div>-->
        </div>
      </div><!-- fecha o container-->


<!--</div>
         <div class="col-md-5">
            <table class="table">
            <thead>
                <th scope="col">Testes de resistência</th>
            </thead>
          <tbody>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Acrobacia</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Arcanismo</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Atletismo</td>
            </tr>
             <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Atuação</td>
            </tr>
             <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Blefar</td>
            </tr>
             <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>História</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Intimidação</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Intuição</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Investigação</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Lidar com animais</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Medicina</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Natureza</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Percepção</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Persuasão</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Prestidigitação</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Religião</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-3"></td>
              <td>Sobrevivencia</td>
            </tr>
          </tbody>
        </table>
    </div> -->

</body>
</html>