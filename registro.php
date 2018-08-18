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
	<div class="ventana container-fluid bg-dark">
		<div class="row">
			<div class="d-flex flex-row bd-highlight mb-3">
              <div class="p-2 bd-highlight">
      	           <img src="imagenes/isaac.png" class="img-fluid img-responsive" width="300px;" height="50px;">
             </div>
             <div class="p-2 bd-highlight">
      	           <a href="miperfil.php" class="btn btn-danger" role="button" value="registrar">MI PERFIL</a>
             </div>
             <div class="p-2 bd-highlight">
      	           <a href="registro.php" class="btn btn-danger" role="button" value="registrar">REGISTRARSE</a>
            </div>
          </div>
			
	     </div>
	</div>


	<div class="jumbotron">
		<form action="" method="post" name="registro">
			<div class="form-group">
				<label for="#">Nombre</label>
			    <input type="text" name="nombre" placeholder="Ingresar Nombre" class="form-control">
			</div>

			<div class="form-group">
				<label for="#">Contraseña</label>
			    <input type="text" name="contra" placeholder="Ingresar contraseña" class="form-control">
			</div>
			
				
		</form>
	</div>




	
	

	
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

