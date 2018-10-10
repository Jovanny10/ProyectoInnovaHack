<?php 
include_once("../iniciosesion/seguridad.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi perfil</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../fontawesome-free-5.3.1-web/css/all.min.css">
	<script type="text/javascript" src="perfil/perfil.js"></script>
</head>
<body>
	<script type="text/javascript">
		$("#bienvenido").hide();
	</script>
	<div class="row justify-content-center">
		<div class="col-md-4">
			<div class="card">
				<h3 class="card-header text-center bg-dark text-white">Mi perfil</h3>
				<div class="card-header">
					<div class="text-center">
						<i class="fas fa-user-circle fa-8x"></i>
					</div>

					<div class="form-group">
						<h3 class="text-center">Jovanny Leobardo</h3>
					</div>
					<div class="row">
						<button class="form-control btn btn-primary"><i class="far fa-edit"></i> Editar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="form-group">
				<div class="progress">
				   <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"   aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>		
			    </div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-10">
					<form id="formulario_perfil">
					<div class="form-group">
						<label for="#" class="label-control">Nombre</label>
						<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $_SESSION['nombre']; ?>">
					</div>

					<div class="form-group">
						<label for="#" class="label-control">Apellidos</label>
						<input type="text" class="form-control" value="Leobardo Salas">
					</div>

					<div class="form-group">
						<label for="#" class="label-control">E-mail</label>
						<input type="text" class="form-control" value="jovannyleobardo10@gmail.com">
					</div>

					<div class="form-group">
						<label for="#" class="label-control">Cel</label>
						<input type="text" class="form-control" value="9531883794">
					</div>

					<div class="form-group text-right">
					    <button class="btn btn-primary"><i class="fas fa-sign-out-alt"></i> Actualizar</button>	 
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>