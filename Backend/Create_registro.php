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

	       $this->fecha  = $_POST['ano'].'/'.$_POST['mes'].'/'.$_POST['dia'];
	       $this->habilidades =ucfirst( $_POST['habilidades']);
	       $this->hobbies  =  ucfirst( $_POST['hobbies']);
	       $this->rol  =  ucfirst( $_POST['rol']);
	       $this->sexo = $_POST['sexo'];
	    }

	    public function Create_registro(){
	    	include 'esqueleto-crud.php';
	    	$registro = new esqueleto();
	    	$sql = "INSERT INTO `comunidad` (`id`, `Nombre`, `Apellidos`, `E-mail`, `psw`, `Celular`, `Talla_Playera_idTalla_Playera`, `Carrera_id`, `Institucion_id`, `Facebook`, `Twitter`, `FechaNacimiento`, `Habilidades`, `Hobbies`, `Rol_idRol`, `Genero_idSexo`) VALUES (NULL, '$this->nombre', '$this->apellidos', '$this->correo', '$this->contraseña', '$this->cel', '$this->talla', '$this->carrera', '$this->institucion', '$this->facebook', '$this->twitter', '$this->fecha', '$this->habilidades', '$this->hobbies', '$this->rol', '$this->sexo')";
	    	 
	    			$resultado =   esqueleto::setRead($sql);
	    			if($resultado){?>
	    				<div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="far fa-grin">
                             <strong>Usuario registrado!</strong>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                        </div>
	    				<?php
	    			}else {
	    				?>
	    				<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="far fa-grin">
                             <strong> Favor de verificar los campos requeridos !</strong>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                        </div>
	    				<?php
	    				
	    			}
	    	 
	    }



}
$Create = new Create_registro();
$Create->Create_registro();
?>