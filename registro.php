<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Esqueleto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/registro.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/registro.js"></script>
</head>
<body>
  <div class="boton text-right">
    <a href="miperfil.php" class="btn btn-danger" role="button" value="registrar">Ir a Mi perfil</a>
  </div>
	<form class="formulario" name="formulario" id="formulario" method="get" action="prueba.php">
    
		<div class="container">
      <div class="form-group">
        <h1 class="text-white">Datos personales</h1>
      </div>
			     <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Nombre *:</label>
                   <input type="text" class="form-control" id="nombre" placeholder="Ingresar el Nombre">
                </div>
                <div class="form-group col-md-6" id="nombre">
                   <label for="inputPassword4">Apellidos *:</label>
                   <input type="text" class="form-control" id="apellidos"  placeholder="Ingresar Apellidos">
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Email *:</label>
                   <input type="email" class="form-control" required="" id="email" placeholder="Labsol@gmail.com /Usuario registro">
                </div>
                <div class="" id="checkemailresponse"></div>
                <div class="form-group col-md-6">
                   <label for="#">Cel *:</label>
                   <input type="tel" class="form-control" id="cel"  placeholder="953-155-01-93">
                </div>
           </div>
           <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Institución :</label>
                   <select class="form-control" id="select" name="select">
                        <option>Seleccionar Institución</option>
                        <option value="div1">Tecnológico Nacional de Mexico</option>
                        <option value="div2">Universidad politecnica de zacatecas</option>
                        <option value="div3">Instituto Miguel Agustin Pro</option>
                        <option value = "div4">Otro..</option>
                   </select>
           </div>
                 
           </div>

           <div class="form-row">
                <div class="form-group col-md-6" id="pai">
                    <label for="#">Otro :</label>
                   <input type="text" class="form-control" placeholder="Universidad politécnica del centro">
                </div>
           </div>

           <div class="form-row" >
                <div class="form-group col-md-6">
                   <label for="#">Facebook :</label>
                   <input type="text" class="form-control"  id="facebook" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Carrera :</label>
                   <input type="text" class="form-control"  id="carrera" placeholder="Ingresar Carrera">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Twitter :</label>
                   <input type="text" class="form-control"  id="twitter" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Fecha de Nacimiento *:</label>
                   <input type="date" class="form-control"  id="fecha" placeholder="00/ 00 / 00">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sexo *:</label>
                   <select class="form-control" id="exampleFormControlSelect1" required>
                        <option>Seleccionar</option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                   </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Talla :</label>
                   <input type="number" class="form-control" id="" placeholder="Ingresar talla de la playera">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Habilidades :</label>
                   <input type="text" class="form-control" id="habilidades" placeholder="Ingresar habilidad">   
                </div>

                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Hobbies :</label>
                   <input type="text" class="form-control" id="hobbies" placeholder="Ingresar Hobbies">   
                </div>
           </div>

           <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="#">Contraseña *:</label>
                   <input type="password" class="form-control"  id="password" placeholder="********" >
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Confirmar contraseña *:</label>
                   <input type="password" class="form-control" id="rpassword" id="contraseña" placeholder="********">

                </div> 
           </div>
           <div class="form-row">
                 <div class="form-group col-md-6" id="error">
                   
                </div>
                <div class="form-group col-md-6" id="divchearsisoniguales">
                   
                </div>
                 
           </div>

  <button type="submit" id="btn" class="btn btn-danger">Registrar</button>
</div>
</form>

	<script src="js/bootstrap.min.js"></script>
</body>
</html>

