<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Esqueleto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/registro.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="Erro-registro">
      
  </div>
	<form>
    
		<div class="container">
      <div class="form-group">
        <h1 class="text-white">Datos personales</h1>
      </div>
			<div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Nombre :</label>
                   <input type="text" class="form-control" id="" placeholder="Ingresar el Nombre">
                </div>
                <div class="form-group col-md-6">
                   <label for="inputPassword4">Apellidos :</label>
                   <input type="text" class="form-control" id="inputPassword4" placeholder="Ingresar Apellidos">
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Email :</label>
                   <input type="email" class="form-control" id="" placeholder="Labsol@gmail.com /Usuario registro">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Cel :</label>
                   <input type="number" class="form-control" id="" placeholder="953-155-01-93">
                </div>
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Contraseña :</label>
                   <input type="password" class="form-control" id="" placeholder="********">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Confirmar contraseña :</label>
                   <input type="password" class="form-control" id="" placeholder="********">
                </div>
           </div>
         

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Facebook :</label>
                   <input type="text" class="form-control" id="" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Institución :</label>
                   <select class="form-control" id="exampleFormControlSelect1">
                        <option>Seleccionar Institución</option>
                        <option>Tecnológico Nacional de Mexico</option>
                        <option>Universidad politecnica de zacatecas</option>
                        <option>Instituto Miguel Agustin Pro</option>
                        <option>Otro..</option>
                   </select>
                </div>
           </div>

           <div class="form-row">
           	 <div class="form-group col-md-6	">
           		<label for="#">Twitter :</label>
                <input type="text" class="form-control" id="" placeholder="Ingresar cuenta">
           	 </div>	
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Fecha de Nacimiento :</label>
                   <input type="date" class="form-control" id="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sexo :</label>
                   <select class="form-control" id="exampleFormControlSelect1">
                   	    <option>Seleccionar</option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                   </select>
                </div>
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Talla :</label>
                   <input type="number" class="form-control" id="" placeholder="Ingresar talla de la playera">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Habilidades :</label>
                   <input type="text" class="form-control" id="" placeholder="Ingresar habilidad">   
                </div>
           </div>

  <button type="submit" class="btn btn-danger">Registrar</button></div>
</form>

	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

