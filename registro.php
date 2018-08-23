<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/registro.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/registro.js"></script>
  <script type="text/javascript" src="js/registroajax.js"></script>
  <script type="text/javascript">
  </script>
</head>
<body>
  <div class="boton text-right">
    <a href="miperfil.php" class="btn btn-danger" role="button" value="registrar">Ir a Mi perfil</a>
  </div>
	<form class="formulario" name="formulario" id="formulario" method="post" action="#" onsubmit="return valida(this)">
    
		<div class="container">
      <div class="form-group">
        <h1 class="text-white">Datos personales</h1>
      </div>
			     <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Nombre *:</label>
                   <input type="text" class="input form-control" onkeypress="return sololetras(event)" name="usuario" id="nombre" placeholder="Ingresar el Nombre">
                </div>
                <div class="form-group col-md-6" id="nombre">
                   <label for="inputPassword4">Apellidos *:</label>
                   <input type="text" name="apellidos" class="form-control" id="apellidos" onkeypress="return sololetras(event)"  placeholder="Ingresar Apellidos">
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Email *:</label>
                   <input type="email" class="form-control" required="" id="email" name="correo" placeholder="Labsol@gmail.com /Usuario registro">
                </div>
                <div class="" id="checkemailresponse"></div>
                <div class="form-group col-md-6">
                   <label for="#">Cel *:</label>
                   <input type="tel" class="form-control" name="cel" onkeypress="return solonumeros(event)" id="cel"  placeholder="953-155-01-93">
                </div>
           </div>
           <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Institución :</label>
                   <select class="form-control" id="select" name="institucion">
                        <option>Seleccionar Institución</option>
                        <option>Tecnológico Nacional de Mexico</option>
                        <option>Universidad politecnica de zacatecas</option>
                        <option>Instituto Miguel Agustin Pro</option>
                        <option id="div4">Otro..</option>
                   </select>
           </div>
                 
           </div>

           <div class="form-row">
                <div class="form-group col-md-6" id="pai">
                    <label for="#">Otro :</label>
                   <input type="text" class="form-control" id="otro" onkeypress="return sololetras(event)" placeholder="Universidad politécnica del centro">
                </div>
           </div>

           <div class="form-row" >
                <div class="form-group col-md-6">
                   <label for="#">Facebook *:</label>
                   <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Carrera :</label>
                   <input type="text" class="form-control" name="carrera" onkeypress="return sololetras(event)"  id="carrera" placeholder="Ingresar Carrera">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Twitter :</label>
                   <input type="text" class="form-control" name="twitter"  id="twitter" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Fecha de Nacimiento *:</label>
                   <input type="date" class="form-control" name="fecha"  id="fecha" placeholder="00/ 00 / 00">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sexo *:</label>
                   <select class="form-control" name="sexo" id="exampleFormControlSelect1" required>
                        <option>Seleccionar</option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                   </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Tallas :</label>
                   <select class="form-control" name="talla" id="seleccionar" name="seleccionar">
                        <option>Seleccionar talla</option>
                        <option>XCH</option>
                        <option>CH</option>
                        <option>M</option>
                        <option>G</option>
                        <option>XG</option>
                        <option>XXG</option>
                   </select>
           </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Habilidades :</label>
                   <input type="text" class="form-control" name="habilidades" id="habilidades" onkeypress="return sololetras(event)" placeholder="Ingresar habilidad">   
                </div>

                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Hobbies :</label>
                   <input type="text" class="form-control" name="hobbies" id="hobbies" placeholder="Ingresar Hobbies">   
                </div>
           </div>

           <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="#">Contraseña *:</label>
                   <input type="password" class="form-control" name="contraseña"  id="password" placeholder="********" >
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Confirmar contraseña *:</label>
                   <input type="password" class="form-control" name="contraseña" id="rpassword" id="contraseña" placeholder="********">

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

