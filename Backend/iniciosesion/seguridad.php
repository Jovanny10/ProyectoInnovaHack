 <?php
	 
session_start();  
if (!isset($_SESSION['activo'])) {
	header("location:../../miperfil.php");
	exit;
}
 
	 
?>