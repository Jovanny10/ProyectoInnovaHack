<?php 
  class Carrera{
  	public function car(){
  		require_once 'esqueleto-crud.php';
  		$esqueleto = new esqueleto();

  		$resultado = $esqueleto->setRead("SELECT * FROM `carrera`");
  		?>
  		<select id="carrera" name="carrera" class="form-control">
  			<option>Seleccionar Carrera</option>
  			<?php

  			while($row = mysqli_fetch_array($resultado)){
  				?>
  				<option value="<?php echo ($row['id']) ?>">
  					<?php echo $row['Carrera'] ?>
  				</option>
  				<?php
  			}
  			?>
  		</select>
  		<?php
  	}
  }

  $car = new Carrera();
  $car->car();
?>