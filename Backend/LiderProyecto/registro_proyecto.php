<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Proyecto</title>
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
	<link rel="stylesheet" href="../../fontawesome-free-5.3.1-web/css/all.min.css">
</head>
<body>
	<script type="text/javascript">
		$("#bienvenido").hide();
	</script>
	 <div class="row justify-content-center">
	 	<div class="col-md-10">
	 	<div class="card center-block">
		<h3 class="card-header primary-color bg-dark text-white"><i class="fas fa-plus-circle"></i> Registro proyecto</h3>
		<div class="card-body">
		<form method="POST" id="proyecto">
			<div class="row">
				<div class="col-md-6">
					<label for="#" class="label-control">Equipo</label>
				    <input type="text" class="form-control">
				</div>
				<div class="col-md-6">
					<label for="#" class="label-control">Eslogan</label>
				    <input type="text" class="form-control">
				</div>
			</div>
			<div class="form-group">
				    <label for="#" class="label-control">Nombre Proyecto</label>
				    <input type="text" class="form-control">
			</div>

			<div class="form-group">
				    <label for="#" class="label-control">Descripción</label>
				    <textarea class="form-control"></textarea>
			</div>

			<div class="form-group">
				<div class="row col-md-6">
					<label for="#" class="label-control">Vertical</label>
					<select class="form-control">
							<option>Vertical 1</option>
							<option>Vertical 2</option>
							<option>Vertical 3</option>
							<option>Vertical 4</option>
					</select>
				</div>
			</div>
			<div class="form-group text-right">
				<button class="btn btn-primary" type="submit"><i class="fas fa-sign-out-alt"></i> Registrar Proyecto</button>
			</div>
		</form>			 
		</div>
	</div>
	 	</div>
	 </div>
</body>
</html>