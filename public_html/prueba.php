<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Esqueleto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		var numero1 = 2;
		var numero2 = 3;
		var suma = numero1 + numero2;
		var nombre = " Jovanny";
		var variableJS = "Contenido de la variable Javascript";
		variableJS  = variableJS + suma + " No sea así con Isaac";
	</script>

	<?php
	$variablephp = "<script>document.write(variableJS)</script>";
	echo "Variable de php = ".$variablephp."<br>"; 
	echo "No lo puedo creer".$variablephp;

	 ?>
</head>
<body>
	
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
