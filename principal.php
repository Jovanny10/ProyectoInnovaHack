	<?php 
        class principal{
	    public function __construct(){
           $this->nombre = ucwords( $_POST['usuario']);
	       $this->apellidos = ucwords( $_POST['apellidos']);
	       $this->correo = $_POST['correo'];
	       $this->cel = $_POST['cel'];
	       $this->institucion = ucwords( $_POST['institucion']);
	       $this->facebook = $_POST['facebook'];
	       $this->carrera = ucwords( $_POST['carrera']);
	       $this->twitter = $_POST['twitter'];
	       $this->fecha  = $_POST['fecha'];
	       $this->sexo = $_POST['sexo'];
	       $this->talla = $_POST['talla'];
	       $this->habilidades =ucfirst( $_POST['habilidades']);
	       $this->hobbies  =  ucfirst( $_POST['hobbies']);
	       $this->contraseña = $_POST['contraseña'];
	    }


	    public function imprimir(){
	    	echo "Mi nombre es :".$this->nombre."<br>";
	    	echo "Mi nombre es :".$this->apellidos."<br>";
	    	echo "Mi nombre es :".$this->correo."<br>";
	    	echo "Mi nombre es :".$this->cel."<br>";
	    }
	}

	$imprimir = new principal();
	$imprimir->imprimir();
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