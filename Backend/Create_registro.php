<?php 
class Create_registro{
            private $nombre;
        	private $apellidos;
        	private $email;
        	private $contraseña;
        	private $cel;
        	private $talla;
        	private $carrera;
        	private $institucion;
        	private $facebook;
        	private $twitter;
        	private $fecha;
        	private $habilidades;
        	private $hobbies;
        	private $rol;
        	private $sexo;

	    public function __construct(){
           $this->nombre = ucwords( $_POST['nombre']);
	       $this->apellidos = ucwords( $_POST['apellidos']);
	       $this->correo = $_POST['correo'];
	       $this->contraseña = $_POST['contraseña'];
	       $this->cel = $_POST['cel'];
	       $this->talla = $_POST['talla'];
	       $this->carrera = ucwords( $_POST['carrera']);
	        $var= $_POST['institucion'];
	       if($var == "div4"){
	       	$this->institucion = ucwords( $_POST['otro']);
	       }else{
	       $this->institucion = ucwords( $_POST['institucion']);
	       } 
	       $this->facebook = $_POST['facebook'];
	       $this->twitter = $_POST['twitter'];
	       $this->fecha  = $_POST['fecha'];
	       $this->habilidades =ucfirst( $_POST['habilidades']);
	       $this->hobbies  =  ucfirst( $_POST['hobbies']);
	       $this->rol  =  ucfirst( $_POST['rol']);
	       $this->sexo = $_POST['sexo'];
	    }

	    public function Create_registro(){
	    	include '../Backend/esqueleto_registro.php';
	    	$registro = new Registro();
	    	$sql = "INSERT INTO `comunidad` (`id`, `Nombre`, `Apellidos`, `E-mail`, `psw`, `Celular`, `Talla_Playera_idTalla_Playera`, `Carrera_id`, `Institucion_id`, `Facebook`, `Twitter`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Rol_idRol`, `Genero_idSexo`) VALUES (NULL, '$this->nombre', '$this->apellidos', '$this->correo', '$this->contraseña', '$this->cel', '$this->talla', '$this->carrera', '$this->institucion', '$this->facebook', '$this->twitter', '$this->fecha', '$this->habilidades', '$this->hobbies', '$this->rol', '$this->sexo')";
	    	if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['contraseña']) && isset($_POST['cel']) && isset($_POST['talla']) && isset($_POST['carrera']) && isset($_POST['institucion']) && isset($_POST['facebook']) && isset($_POST['twitter']) && isset($_POST['fecha']) && isset($_POST['rol']) && isset($_POST['sexo']) ){
	    		
	    		echo  Registro::get_create($sql);
	    	}
	    	 
	    }


}
$Create = new Create_registro();
$Create->Create_registro();
?>