<?php
     class Int{
     	public function vis(){
     		require 'esqueleto-crud.php';
             $esqueleto = new esqueleto();
             $resultado = $esqueleto->setRead("SELECT `id`, `Institucion` FROM `institucion`");
		     ?>
		     <select id="institucion" name="institucion" class="form-control">
			   <option>Seleccionar Institucion</option>
			     <?php 
				while ($row = mysqli_fetch_array($resultado)) {
					?>
					     <option value="<?php echo($row['id']) ?>"><?php echo($row['Institucion']) ?></option>
				      <?php
				    }
			        ?>
		    </select>
		<?php
     	}
     	
     }


     $inst = new Int();
     $inst->vis();

  
    		 
 
 
 
?>
