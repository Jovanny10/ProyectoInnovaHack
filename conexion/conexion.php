<?php 
class conexion{

	private $bd;
	public function __construct(){
       $this->bd = new mysqli("localhost","root","","innovahack");
       if($this->bd->connect_errno){
       	echo "Fallo al conectar a MYSQL".$this->bd->connect_error;
       	return;
       }else{
       	echo "Conexion con exito";
       }

       
	}


}
 $conexion =new conexion();

?>