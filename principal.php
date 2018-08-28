	<?php 
        class principal{
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
	    public function get_insert(){
	    	include 'conexion/abrirconexion.php';
	    	$con = new Conexion();
	    	$sql = "INSERT INTO `comunidad` (`id`, `Nombre`, `Apellidos`, `E-mail`, `psw`, `Celular`, `Talla_Playera_idTalla_Playera`, `Carrera_id`, `Institucion_id`, `Facebook`, `Twitter`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Rol_idRol`, `Genero_idSexo`) VALUES (NULL, '$this->nombre', '$this->apellidos', '$this->correo', '$this->contraseña', '$this->cel', '$this->talla', '$this->carrera', '$this->institucion', '$this->facebook', '$this->twitter', '$this->fecha', '$this->habilidades', '$this->hobbies', '$this->rol', '$this->sexo')";

	    	 $resultado = mysqli_query($con,$sql);
	    	 if(!$resultado){
	    	 	echo "Error".$sql;
	    	 }else {
	    	 	echo "Correcto";
	    	 }

	    }


	}

	$imprimir = new principal();
	$imprimir->get_insert();
/*	
	echo "Nombre :".$nombre."<br>";
	echo "Apellidos :".$apellidos."<br>";
	echo "Correo :".$correo."<br>";
	echo "Cel :".$cel."<br>";
	echo "Institucion :".$institucion."<br>";
	echo "Facebook :".$facebook."<br>";
	echo "Carrera :".$carrera."<br>";
	echo "Twitter :".$twitter."<br>";
	echo "Fecha :".$fecha."<br>";
	echo "Sexo :".$sexo."<br>";
	echo "Talla :".$talla."<br>";
	echo "Habilidades :".$habilidades."<br>";
	echo "Hobbies :".$hobbies."<br>";
	echo "Contraseña :".$contraseña."<br>";*/

	?>