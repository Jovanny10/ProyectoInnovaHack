<?php

 class proceso{
 	public function validacion(){
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
 	if(empty($_POST["usuario"]) && empty($_POST["contra"])){
 		?>
 		<div class="alert alert-danger alert-dismissible fade show text-center" role = "alert"><i class="fas fa-times"></i>
 			<strong>Rellenar los campos Usuario y Contraseña !</strong>
 			<button type = "button" class="close" data-dismiss = "alert" aria-label = "Close">
 				<span aria-hidden = "true">&times;</span>
 			</button>
 			
 		</div>
 		<?php
 	}else
  	if(empty($_POST["usuario"])){
  		?>
  		<div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                       <strong> Rellenar el campo Usuario !</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                        </button>
        </div>
        <?php
  	}else
  	if(empty($_POST["contra"])){
  		?>
  		<div class="alert alert-danger alert-dismissibe fade show text-center" role = "alert"><i class="fas fa-times"></i>
  			<strong>Rellenar el campo Constraseña !</strong>
  			<button type="button" class="close" data-dismiss = "alert" aria-label = "Close">
  				<span aria-hidden = "true">&times;</span>
  			</button>
  			
  		</div>
  		<?php
  	}
  }
 }
}
$proce = new proceso();
$proce->validacion();  
?> 