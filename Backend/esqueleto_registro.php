<?php 
class Registro{
	public function get_create($create){
		include '../conexion/abrirconexion.php';
		$con = new Conexion();
		$resultado = mysqli_query($con,$create);
	    if($resultado){
	    		echo 1;
	    	}else{
	    		echo 0;
	    	}
	}
}


?>