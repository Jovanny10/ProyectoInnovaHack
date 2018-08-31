<?php 
include 'conexion/abrirconexion.php';
$con = new Conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/registro.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
  </script>
</head>
<body>
  <div class="boton text-right">
    <a href="miperfil.php" class="btn btn-danger" role="button" value="registrar">Ir a Mi perfil</a>
  </div>
	<form class="formulario" name="formulario" id="formulario" method="post">
    
		<div class="container">
      <div class="form-group">
        <h1 class="text-white">Datos personales</h1>
      </div>
			     <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Nombre <small>(Required)</small></label>
                   <input type="text" class="input form-control" onkeypress="return sololetras(event)" name="nombre" id="nombre" placeholder="Ingresar el Nombre">
                </div>
                <div class="form-group col-md-6" id="nombre">
                   <label for="inputPassword4">Apellidos <small>(Required)</small>:</label>
                   <input type="text" name="apellidos" class="form-control" id="apellidos" onkeypress="return sololetras(event)"  placeholder="Ingresar Apellidos">
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Email (Required)</label>
                   <input type="email" class="form-control" required="" id="email" name="correo" placeholder="Labsol@gmail.com /Usuario registro">
                   <div id="infoemail">
                   </div>
                </div>
                <div class="" id="checkemailresponse"></div>
                <div class="form-group col-md-6">
                   <label for="#">Cel <small>(Required)</small></label>
                   <input type="tel" class="form-control" name="cel" onkeypress="return solonumeros(event)" id="cel"  placeholder="953-155-01-93">
                </div>
           </div>
           <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Institución <small>(Required)</small></label>
                   <select class="form-control" id="institucion" name="institucion">
                    <option value = "0">Seleccionar Institucion</option>
                    <?php 
                            $periodo="SELECT `id`, `Institucion` FROM `institucion` ORDER BY `Institucion`.`id` ASC ";
                            $periodoResp = $con->query($periodo);
                            if ($periodoResp->num_rows>0) {
                                while ($filaPeriodo = $periodoResp->fetch_assoc()) { 
                                   ?>
                                   <option value="<?php print ($filaPeriodo['id']); ?>"><?php echo $filaPeriodo['Institucion'] ; ?></option>
                                   <?php 
                                }
                            }
                         ?>
                   </select>
           </div>
                 
           </div>

           <div class="form-row">
                <div class="form-group col-md-6" id="pai">
                    <label for="#">Otra institucion <small>(Required)</small></label>
                   <input type="text" class="form-control" name="otro" id="" onkeypress="return sololetras(event)" placeholder="Universidad politécnica del centro">
                </div>
           </div>

           <script type="text/javascript">
             $(document).ready(function() {
               $('#pai').hide();
               $('#select').on('change', function() {
               var selectValor = '#' + $(this).val();
               if (selectValor == '#div4') {
                $('#pai').show();
                  } else {
                 $('#pai').hide();
                }
             });
           });
           </script>

           <div class="form-row" >
                <div class="form-group col-md-6">
                   <label for="#">Facebook <small>(Requered)</small></label>
                   <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Carrera <small>(Required)</small></label>
                   <select class="form-control" id="carrera" name="carrera">
                        <option value = "0">Seleccionar carrera</option>
                        <?php 
                            $carrera=" SELECT * FROM `carrera` ORDER BY `carrera`.`id` ASC";
                            $periodoResp = $con->query($carrera);
                            if ($periodoResp->num_rows>0) {
                                while ($filaPeriodo = $periodoResp->fetch_assoc()) { 
                                   ?>
                                   <option value="<?php echo $filaPeriodo['id']; ?>"><?php echo $filaPeriodo['Carrera'] ; ?></option>
                                   <?php 
                                }
                            }
                         ?>
                   </select>
                </div>
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Twitter <span>(Required)</span></label>
                   <input type="text" class="form-control" name="twitter"  id="twitter" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Fecha de Nacimiento <small>(Required)</small></label>
                   <input type="date" class="form-control" name="fecha"  id="fecha" placeholder="00/ 00 / 00">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sexo <small>(Required)</small></label>
                   <select class="form-control" name="sexo" id="exampleFormControlSelect1" required>
                    <option value = "0">Seleccionar Sexo</option>
                     <?php 
                            $sexo=" SELECT * FROM `genero` ORDER BY `genero`.`idSexo` ASC ";
                            $periodoResp = $con->query($sexo);
                            if ($periodoResp->num_rows>0) {
                                while ($filaPeriodo = $periodoResp->fetch_assoc()) { 
                                   ?>
                                   <option value="<?php echo $filaPeriodo['idSexo']; ?>"><?php echo $filaPeriodo['Sexo'] ; ?></option>
                                   <?php 
                                }
                            }
                         ?>
                   </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Tallas <small>(Required)</small></label>
                   <select class="form-control" name="talla" id="talla" name="seleccionar">
                    <option value = "0">Seleccionar Talla</option>
                        <?php 
                            $tallas=" SELECT * FROM `talla_playera` ORDER BY `talla_playera`.`idTalla_Playera` ASC ";
                            $periodoResp = $con->query($tallas);
                            if ($periodoResp->num_rows>0) {
                                while ($filaPeriodo = $periodoResp->fetch_assoc()) { 
                                   ?>
                                   <option value="<?php echo $filaPeriodo['idTalla_Playera']; ?>"><?php echo $filaPeriodo['Talla_Playeracol'] ; ?></option>
                                   <?php 
                                }
                            }
                         ?>
                   </select>
               </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Habilidades :</label>
                   <input type="text" class="form-control" name="habilidades" id="habilidades" onkeypress="return sololetras(event)" placeholder="Ingresar habilidad">   
                </div>

                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Hobbies :</label>
                   <input type="text" class="form-control" name="hobbies" id="hobbies" placeholder="Ingresar Hobbies">   
                </div>
           </div>
           <div class="form-row">
             <div class="form-group col-md-6">
              <label for="#">Rol <small>(Required)</small></label>
              <select class="form-control" name="rol" id="rol">
                <option value = "0">Seleccionar un rol</option>
                        <?php 
                            $rol=" SELECT * FROM `rol` ORDER BY `rol`.`idRol` ASC";
                            $periodoResp = $con->query($rol);
                            if ($periodoResp->num_rows>0) {
                                while ($filaPeriodo = $periodoResp->fetch_assoc()) { 
                                   ?>
                                   <option value="<?php print($filaPeriodo['idRol']); ?>"><?php echo $filaPeriodo['Rol'] ; ?></option>
                                   <?php 
                                }
                            }
                         ?>
                   </select>
               
             </div>
           </div>

           <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="#">Contraseña <small>(Required)</small></label>
                   <input type="password" class="form-control" name="contraseña"  id="password" placeholder="********" >
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Confirmar contraseña <small>(Required)</small></label>
                   <input type="password" class="form-control" name="contraseña" id="rpassword" id="contraseña" placeholder="********">

                </div>
          </div>

                <script type="text/javascript">
                  /*--------------INICIO VALIDACION DE CONTRASENA-------------- */

                $(document).ready(function() {
                  $("#rpassword").keyup(checkPasswordMatch);
                });
                $(document).ready(function() {
                  $("#password").keyup(checkPasswordMatch2);
                });

                function checkPasswordMatch2() {
                var repeatPass = document.getElementById('rpassword').value;
                var repeatclave = repeatPass.length;
                if (repeatclave > 0) {
                var password = $("#password").val();
                var confirmarPassword = $("#rpassword").val();
        if (password != confirmarPassword) {
            $("#divchearsisoniguales").html("<div class='alert alert-danger'><i class='fa fa-close'></i>  Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'></div>");
        } else {
            $("#divchearsisoniguales").html("<div class='alert alert-success'><i class='fa fa-check'></i> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'></div>");
        }
    }
                }

                function checkPasswordMatch() {
                var repeatPass = document.getElementById('password').value;
                var repeatclave = repeatPass.length;
                if (repeatclave > 0) {
                var password = $("#password").val();
                var confirmarPassword = $("#rpassword").val();
                if (password != confirmarPassword) {
            $("#divchearsisoniguales").html("<div class='alert alert-danger'><i class='fa fa-close'></i>  Las contraseñas NO coinciden!<input value='error' type='hidden' name='passwordchecker'></div>");
        } else {
            $("#divchearsisoniguales").html("<div class='alert alert-success'><i class='fa fa-check'></i> Las contraseñas coinciden.<input type='hidden'  value='1' name='passwordchecker'></div>");
        }
    }
                }
/* ------------FIN DE VALIDACION DE CONTRASENA---------------------*/
                </script>
          
           <div class="form-row">
                <div class="form-group col-md-6" id="error">
                    
                </div>
                <div class="" id="checkemailresponse"></div>
                <div class="form-group col-md-6" id="divchearsisoniguales">
                   
                </div>
           </div>
           <div class="form-group">
             <button type="submit" id="btn" class="btn btn-danger" value = "registrar">Registrar</button>
           </div>
</form>
 </div>
  <script type="text/javascript">
    
   
/*--------------VALIDACION DE CAMPOS DEL FORMULARIO ----------------------------*/
function solonumeros(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numero = "012345789";
    especiales = "8-37-38-46-27";
    teclado_especial = false;
    for (var i in especiales) {
        if (key == especiales[i]) {
            teclado_especial = true;
        }
    }
    if (numero.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
    }
}

function sololetras(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key).toLowerCase();
    letras = "abcdefghijklmnñopqrstuvwxyz ";
    especiales = "8-9-32-37-38-46-164";
    teclado_especial = false;
    for (var i in especiales) {
        if (key == especiales[i]) {
            teclado_especial = true;
            break;
        }
    }
    if (letras.indexOf(teclado) == -1 && !teclado_especial) {
        return false;
    }
}
 

  </script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

