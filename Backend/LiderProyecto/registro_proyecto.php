<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro Proyecto</title>
	 
	<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="modal fade" id="mimodal">
			<div class="modal-dialog" role = "document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Registrar proyecto</h4>
						<button type="button" class="close" data-dismiss = "modal" aria-label = "Close">
							<span aria-hidden = "true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="#" class="label-control">Nombre equipo</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Nombre proyecto</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Eslogan</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Descripción proyecto</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label for="#" class="label-control">Vertical</label>
							<select class="form-control">
								<option>Vertical 1</option>
								<option>Vertical 2</option>
								<option>Vertical 3</option>
								<option>Vertical 4</option>
							</select>
						</div>

					</div>
					<div class="modal-footer">
						<a href="#" data-dismiss = "modal" class="btn btn-primary">Aceptar</a>
					</div>	
				</div>
			</div>
		</div>
	</div>

<script>
   $(document).ready(function()
   {
      $("#mimodal").modal("show");
   });
</script>
 
</body>
</html>