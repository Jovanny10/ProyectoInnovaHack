<?php 
$nombre = ucwords( $_POST['usuario']);
$apellidos = ucwords( $_POST['apellidos')];
$correo = $_POST['correo'];
$cel = $_POST['cel'];
$institucion = ucwords( $_POST['institucion']);
$facebook = $_POST['facebook'];
$carrera = ucwords( $_POST['carrera']);
$twitter = $_POST['twitter'];
$fecha  = $_POST['fecha'];
$sexo = $_POST['sexo'];
$talla = $_POST['talla'];
$habilidades =ucfirst( $_POST['habilidades']);
$hobbies  =  ucfirst( $_POST['hobbies']);
$contraseña = $_POST['contraseña'];
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
echo "Contraseña :".$contraseña."<br>";

?>