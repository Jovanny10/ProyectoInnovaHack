<?php
   class enrutador{
   	public function Vista($vista){
   		switch ($vista) {
   			case "1":
   				break;
   			case "2":
   				break;
   			case "3":
   				break;
   			case "10":
   			    include_once("../view/mi_perfil.php");
   				break;
   			
   			default:
   				# code...
   				break;
   		}

   	}

   	public function validarGet($variable){
   		if(empty($variable)){

   		}else{
   			return true;
   		}
   	}
  }


 ?>