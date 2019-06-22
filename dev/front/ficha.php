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
    <div class="row"> 
      <div class="form-group col-md-6">
        <label for="campo1">Nome do personagem:</label>
        <input type="text" class="form-control" id="campo1">
      </div>

      <div class="form-group col-md-2">
        <label for="campo2">Classe e nivel</label>
        <input type="text" class="form-control" id="campo3">
      </div>

      <div class="form-group col-md-2">
        <label for="campo3">Antecedente</label>
        <input type="text" class="form-control" id="campo3">
      </div>
          
      <div class="form-group col-md-2">
        <label for="campo1">Raça</label>
        <input type="text" class="form-control" id="campo1">
      </div>
      
      <div class="form-group col-md-2">
        <label for="campo1">Tendência</label>
        <input type="text" class="form-control" id="campo1">
      </div>
          
      <div class="form-group col-md-2">
        <label for="campo1">Pontos de experiência</label>
        <input type="text" class="form-control" id="campo1">
      </div>      
    </div>

    <hr align="center" width="1200" size="2" color="white">

<!--<input type="text" class="form-control" id="campo3">-->

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

     <div class="form-group col-md-3">
      <label for="campo3">Inspiração</label><br>
      <input type="text" class="form-control col-md-5" id="campo3">
      <div class="form-group">
        <label for="campo2">Bônus de proficiencia</label>
        <input type="text" class="form-control col-md-3" id="campo3">
      </div>
      <table class="table">
            <thead>
                <th scope="col">Testes de resistência</th>
            </thead>
          <tbody>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-2"></td>
              <td>Força</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-2"></td>
              <td>Destreza</td>
            </tr>
            <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-2"></td>
              <td>Constituição</td>
            </tr>
             <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-2"></td>
              <td>Inteligência</td>
            </tr>
             <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-2"></td>
              <td>Sabedoria</td>
            </tr>
             <tr>
              <th scope="row"><input type="radio"></th>
              <td><input type="text" class="form-control col-md-2"></td>
              <td>Carisma</td>
            </tr>
          </tbody>
        </table>
     </div>
   
    <div class="form-group col-md-4">
      <div class="col-md-4"> 
        <label for="campo1">Classe ARMD</label><br>
        <input type="text" class="form-control col-md-5 offset-sm-1" id="campo1">
      </div>
      <div class="col-md-4">
        <label for="campo1">Iniciativa</label><br>
        <input type="text" class="form-control col-md-5" id="campo1">
      </div>
      <div class="col-md-4">
        <label for="campo1">Desloc.</label><br>
        <input type="text" class="form-control col-md-4" id="campo1">
      </div>

          <label>PV totais</label>
          <input type="text" class="form-control">

        <label for="campo3">Pontos de vida atuais</label>
        <input type="text" class="form-control" id="campo3">

    </div>
    
   
    <div class="col-md-3">
      <div>
        <label for="campo1" style="">Traços de personalidade</label>
        <textarea class="form-control" name="personalidade" id="mensagem" cols="50" rows="3"></textarea>
      </div>
      <div>
        <label for="campo1" style="">Ideais</label>
       <textarea class="form-control" name="personalidade" id="mensagem" cols="50" rows="3"></textarea>
      </div>
      <div>
        <label for="campo1" style="">Ligações</label>
       <textarea class="form-control" name="personalidade" id="mensagem" cols="50" rows="3"></textarea>
      </div>
      <div>
        <label for="campo1" style="">Defeitos</label>
       <textarea class="form-control" name="personalidade" id="mensagem" cols="50" rows="3"></textarea>
      </div>
     </div>
    </div>



      
    </div><!-- fecha o container-->




</body>
</html>