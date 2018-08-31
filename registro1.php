<?php 
include 'conexion/abrirconexion.php';
$con = new Conexion();
?>
<!doctype html>
<html lang="en">
<head>
  
  <!-- 
    <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  -->
 <script src="js/jquery-3.3.1.min.js"></script>
  
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Registro</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
	<!--  Made With Get Shit Done Kit  -->

    <!--   Big container   -->
    <div class="container">
        <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

            <!--      Wizard container        -->
            <div class="wizard-container">

                <div class="card wizard-card" data-color="orange" id="wizardProfile">
                    <form class="formulario" name="formulario" id="formulario" method="post">

                    	<div class="wizard-header">
                        	<h3>
                        	   <b>Registros</b><br>
                        	</h3>
                    	</div>

						          <div class="wizard-navigation">
							         <ul>
	                            <li><a href="#about" data-toggle="tab">Datos personales</a></li>
	                            <li><a href="#account" data-toggle="tab">Datos Escolares</a></li>
	                            <li><a href="#address" data-toggle="tab">Redes sociales</a></li>
	                     </ul>

						          </div>

                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                              <div class="row">
                                  <h4 class="info-text"> Informacion confidencial</h4>
                                 <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Nombre <small>(Required)</small></label>
                                      <input type="text" class="form-control" placeholder="" onkeypress="return sololetras(event)" name="nombre" id="nombre">
                                    </div>
                                  </div>

                                  <div class="col-sm-4 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Apellidos <small>(Required)</small></label>
                                      <input type="text" class="form-control" placeholder="" onkeypress="return sololetras(event)" id="apellidos" name="apellidos"> 
                                    </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Email <small>(required)</small></label>
                                          <input name="correo" type="email" class="form-control" placeholder="labsol@gmail.com" id="email">
                                      </div>
                                  </div>
                                  <div class="col-sm-10 col-sm-offset-1">
                                      <div class="form-group">
                                          <label>Contrasena <small>(required)</small></label>
                                          <input name="contraseña" type="password" id="contrasena" class="form-control" placeholder="4 caracteres maximo">
                                      </div>
                                  </div>

                                  <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Fecha de Nacimiento <small>(Required)</small></label>
                                      <input type="date" name="fecha" class="form-control" placeholder="12/05/2018">
                                    </div>
                                  </div>

                                  <div class="col-sm-4 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Sexo <small>(Required)</small></label>
                                      <select name="sexo" class="form-control" name="sexo">
                                        <option>Seleccionar Sexo</option>
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
                                  </div>

                                  <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Rol <small>(Required)</small></label>
                                      <select name="rol" class="form-control" name="rol">
                                       <option>Seleccionar Rol</option> 
                                          <?php 
                            $rol=" SELECT * FROM `rol` ORDER BY `rol`.`idRol` ASC";
                            $periodoResp = $con->query($rol);
                            if ($periodoResp->num_rows>0) {
                                while ($filaPeriodo = $periodoResp->fetch_assoc()) { 
                                   ?>
                                   <option value="<?php echo $filaPeriodo['idRol']; ?>"><?php echo $filaPeriodo['Rol'] ; ?></option>
                                   <?php 
                                    }
                                }
                             ?>
                                      </select>
                                    </div>
                                  </div>

                                  <div class="col-sm-4 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Cel <small>(Required)</small></label>
                                      <input type="number" placeholder="999999999" name="cel" class="form-control" id="cel">
                                    </div>
                                  </div>

                                  <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Habilidades</label>
                                      <input type="text" class="form-control" onkeypress="return sololetras(event)" name="habilidades" id="habilidades">
                                    </div>
                                  </div>
                                  <div class="col-sm-4 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Hobbies</label>

                                      <input type="text" class="form-control" name="hobbies" id="hobbies" onkeypress="return sololetras(event)">
                                    </div>
                                    
                                  </div>
                              </div>
                            </div>
                            <div class="tab-pane" id="account">
                                <div class="row">
                                  <div class="col-sm-5 col-sm-offset-1">
                                    <label>Institucion <small>(Required)</small></label>
                                    <select class="form-control" name="institucion">
                                      <option>Ingresar Institucion</option>
                                      <?php 
                            $periodo="SELECT `id`, `Institucion` FROM `institucion` ORDER BY `Institucion`.`id` ASC ";
                            $periodoResp = $con->query($periodo);
                            if ($periodoResp->num_rows>0) {
                                while ($filaPeriodo = $periodoResp->fetch_assoc()) { 
                                   ?>
                                   <option value="<?php echo $filaPeriodo['id']; ?>"><?php echo $filaPeriodo['Institucion'] ; ?></option>
                                   <?php 
                                    }
                                }
                             ?>
                                    </select>
                                  </div>

                                  <div class="col-sm-4 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Carrera <small>(Required)</small></label>
                                     <select class="form-control" name="carrera">
                                      <option>Ingresar Carrera</option>
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

                                  <div class="col-sm-5 col-sm-offset-1">
                                    <div class="form-group">
                                      <label>Talla <small>(Playera)</small></label>
                                     <select class="form-control" name="talla">
                                      <option>Ingresar Talla</option>
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

                                </div>
                            </div>

                            <div class="tab-pane" id="address">
                                <div class="row">
                                     <div class="col-sm-5 col-sm-offset-1">
                                       <div class="form-group">
                                         <label>Facebook</label>
                                         <input type="text" class="form-control" onkeypress="return sololetras(event)" name="facebook" id="facebook">
                                       </div>
                                     </div>

                                     <div class="col-sm-4 col-sm-offset-1">
                                       <div class="form-group">
                                         <label>Twitter</label>
                                         <input type="text" class="form-control" onkeypress="return sololetras(event)" name="twitter" id="twitter">
                                       </div>
                                     </div>
                            </div>

                        </div>

                        <div class="wizard-footer height-wizard">
                            <div class="pull-right">

                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                                <button type="submit" id="btn" class="btn btn-finish btn-fill btn-warning btn-wd btn-sm" value = "registrar">Finalizar</button>
                            </div>
                            <div class="pull-left">
                              <div class="form-group">
                                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Anterior' />
                              </div>
                                
                            </div>
                            <div class="clearfix"></div>

                            <a href="miperfil.php" class="btn btn-danger" role="button" value="registrar">Mi perfil</a>
                        </div>
                        <div class="btn btn-finish btn-fill btn-wd btn-sm" id="alerta">
                          
                        </div>
                        <div class="btn btn-finish btn-fill btn-wd btn-sm" id="error">
                          
                        </div>
                    </form>
                </div>
            </div> <!-- wizard container -->
        </div>
        </div><!-- end row -->
    </div> <!--  big container -->

</div>
<script type="text/javascript">
  $(document).ready(function(){
  $('form').submit(function(e) {
    var datos = $('#formulario').serialize();
    e.preventDefault();
    
    $.ajax({
      url:'Backend/Create_registro.php',
      type:'post',
      data: datos,
      beforeSend:function(){
        $('#alerta').html('<div class="alert alert-success"><button type = "button" class = "close" data-dismiss="alert">&times;</button><strong>Procesando... espere porfavor...</strong>.</div>');
      }
      
    })
    .done(function(){
      $('#alerta').html('<div class="alert alert-success"><button type = "button" class = "close" data-dismiss="alert">&times;</button><strong>Usuario registrado..Iniciar Sesion en mi perfil</strong>!.</div>');
    })
    .fail(function(){
      $('#alerta').html("Error");
    })


    .always(function(){
      $('#alerta').html("hola");
    })

  });
  });
/*
success:function(data){
        $('#alerta').html('<div class="alert alert-success"><button type = "button" class = "close" data-dismiss="alert">&times;</button><strong>Usuario registrado..Iniciar Sesion en mi perfil</strong>!.</div>');
        alert(data);
      }

*/
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
/*VALIDACION DE CAMPOS*/
$(document).ready(function(){
  var formulario = document.getElementsByName('formulario')[0],
        elementos = formulario.elements,
        boton = document.getElementById('btn');

        var validarNombre = function(e) {
        if (formulario.nombre.value.length <= 2 || formulario.nombre.value == null || /^\s+$/.test(nombre)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo nombre *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }

    var apellidos = function(e) {
        if (formulario.apellidos.value.length <= 2 || formulario.apellidos.value == null || /^\s+$/.test(apellidos)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo apellidos *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }

        function validar(e){
          validarNombre(e);
          apellidos(e);
        }


        formulario.addEventListener("submit", validar);

});
/*FIN VALIDACION CAMPOS*/

/*------------INICIO DE CAMPOS CORRECTOS CON COLOR VERDE -------------*/
$(function() {
    $("#nombre").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var capturado = document.getElementById('nombre').value;
        if (capturado.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#apellidos").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var a = document.getElementById('apellidos').value;
        if (a.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#email").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var email = document.getElementById('email').value;
        if (email.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#cel").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('cel').value;
        if (cel.length == 10) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#otro").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('otro').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#facebook").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('facebook').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#carrera").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('carrera').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#twitter").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('twitter').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#fecha").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('fecha').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#talla").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('talla').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#habilidades").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('habilidades').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
$(function() {
    $("#hobbies").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('hobbies').value;
        if (cel.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#contrasena").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };
        var error = {
            "border": '2px solid red'
        };
        var cel = document.getElementById('contrasena').value;
        if (cel.length > 3) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});
</script>
</body>
 
	<!--   Core JS Files   -->
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>
