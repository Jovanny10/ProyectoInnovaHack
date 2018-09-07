<?php 

   class guardar1{
     function __construct() {
       $this->carrera = $_POST["ca"];
     }

     public function guardarCarrera(){
      require_once 'esqueleto-crud.php';
        $esqueleto = new esqueleto();
        $sql = "INSERT INTO `carrera`(`id`, `Carrera`) VALUES (null,'$this->carrera')";
        $resultado = $esqueleto->setRead($sql);
        if($resultado){
          ?>
          <div class="alert alert-success alert-dismissible fade show text-center" role="alert"><i class="fas fa-check"></i>
                              <strong>Carrera registrada!</strong>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                        </div>
                        <?php
        }else{
          ?>
          <div class="alert alert-danger alert-dismissible fade show text-center" role="alert"><i class="fas fa-times"></i>
                             <strong> Error al registrar la Carrera !</strong>
                             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                        </div>
                        <?php
        }

     }
   }

$car = new guardar1();
$car->guardarCarrera();


?>