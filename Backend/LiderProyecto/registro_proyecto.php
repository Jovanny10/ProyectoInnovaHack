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
				    <input type="text" class="form-control" name="equipo" id="equipo">
				</div>
				<div class="col-md-6">
					<label for="#" class="label-control">Eslogan</label>
				    <input type="text" class="form-control" name="eslogan">
				</div>
			</div>
			<div class="form-group">
				    <label for="#" class="label-control">Nombre Proyecto</label>
				    <input type="text" class="form-control" name="proyecto">
			</div>

			<div class="form-group">
				    <label for="#" class="label-control">Descripción</label>
				    <textarea class="form-control" name="descripcion"></textarea>
			</div>

			<div class="form-group" id="registrar">
				<div class="row col-md-8">
					<label for="#" class="label-control">Vertical</label>
					<select class="form-control" name="vertical" id="vertical">
						<option selected="" value="0">Seleccionar un vertical</option>
						<?php
						    require_once '../../conexion/abrirconexion.php';
						    $conexion = new Conexion();
						    $sql = "SELECT `id`, `Nombre`, `Descripcion`, `InfAsesoria`, `HackatonEdicion_id` FROM `vertical` WHERE 1"; 
						    $resultado = $conexion->query($sql);
						    while($row = mysqli_fetch_array($resultado)){
						    	?>
						    	<option value="<?php echo $row['id']; ?>"><?php echo utf8_encode($row['Nombre']) ?></option>
						    	<?php
						    }

						 ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="row col-md-12">
					<div id="mensaje">
					
		            </div>
				</div>
			</div>
			<div class="form-group text-right">
				<button class="btn btn-primary" type="submit" id="registro"><i class="fas fa-sign-out-alt"></i> Registrar Proyecto</button>
			</div>
		</form>			 
		</div>
	    </div>
	    </div>
	 </div>

	 <script type="text/javascript">
	 	$(document).ready(function(){
	 		 $("#registro").click(function(e){
	 		 	e.preventDefault();
	 		 	var datos = $("#proyecto").serialize();
	 		 	$.ajax({
	 		 		type:"POST",
	 		 		url:"registro/proceso.php",
	 		 		data:datos,
	 		 		beforeSend:function(resultado){
	 		 			$("#mensaje").html("Procesando...");
	 		 		},
	 		 		success:function(resultado){
	 		 			$('#mensaje').slideDown('slow');
	 		 			$("#mensaje").html(resultado);
	 		 			setTimeout(function(){
	 		 				$("#mensaje").slideUp('slow');

	 		 			},4000);
	 		 		}
	 		 	})
	 		 })
	 	})
	 </script>
</body>
</html>