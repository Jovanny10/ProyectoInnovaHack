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
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/registro.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.3.1-web/css/all.min.css">
  <script src="js/jquery-3.33.1.min.js"></script>
  <script type="text/javascript" src="Backend/institucion.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
</head>
<body>
  <div class="boton text-right">
    <a href="miperfil.php" class="btn btn-danger" role="button" value="registrar"><i class="fas fa-arrow-circle-left"></i>  Ir a Mi perfil</a>
  </div>
  <form class="formulario" name="formulario" id="formulario" method="post">
    
    <div class="container">
      <div class="form-group">
        <h1 class="text-white"><i class="far fa-address-card"></i> Datos personales</h1>
      </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Nombre :<small class="text-danger"> (Required)</small></label>
                   <input type="text" class="input form-control" onkeypress="return sololetras(event)" name="nombre" id="nombre" placeholder="Ingresar el Nombre">
                </div>
                <div class="form-group col-md-6" id="nombre">
                   <label for="inputPassword4">Apellidos :<small class="text-danger"> (Required)</small>:</label>
                   <input type="text" name="apellidos" class="form-control" id="apellidos" onkeypress="return sololetras(event)"  placeholder="Ingresar Apellidos" required="">
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Email :<small class="text-danger"> (Required)</small> </label>
                   <input type="email" class="form-control" required="" id="email" name="correo" placeholder="Labsol@gmail.com /Usuario registro" required="">
                   <div id="infoemail">
                   </div>
                </div>
                <div class="" id="checkemailresponse"></div>
                <div class="form-group col-md-6">
                   <label for="#">Cel :<small class="text-danger"> (Required)</small></label>
                   <input type="tel" class="form-control" name="cel" onkeypress="return solonumeros(event)" id="cel"  placeholder="953-155-01-93" required="">
                </div>
           </div>
           <div class="form-row">
               <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Institución :<small class="text-danger"> (Required)</small></label>
                   <select class="institucion" name="institucion">
                    <?php 
                    require_once 'conexion/abrirconexion.php';
                    $con = new Conexion();
                    $sql = "SELECT * FROM `institucion`";
                    $resultado = $con->query($sql);

                    while($row = mysqli_fetch_array($resultado)){
                      ?>
                      <option value="<?php echo $row['id'] ?>"><?php echo $row['Institucion'] ?></option>
                      <?php

                       }
                    ?>
                    </select>
              </div>
                 
           </div>

           <div class="form-row">
                <div class="form-group col-md-6" id="pai">
                    <label for="#">Otra institucion :<small class="text-danger"> (Required)</small></label>
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
                   <label for="#">Facebook :<small class="text-danger"> (Requered)</small></label>
                   <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Ingresar cuenta" required="">
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Carrera :<small class="text-danger"> (Required)</small></label>
                   <div class="carrera">
                     
                   </div>
                </div>
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Twitter :<small class="text-danger"> (Required)</small> </label>
                   <input type="text" class="form-control" name="twitter"  id="twitter" placeholder="Ingresar cuenta" required="">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Fecha de Nacimiento :<small class="text-danger"> (Required)</small></label>
                   <div class="row">
                     <div class="col-xs-4 col-md-4">
                      <label> Dia</label>
                      <select name="dia" class="form-control">
        <?php
        for ($i=1; $i<=31; $i++) {
            if ($i == date('j'))
                echo '<option value="'.$i.'" selected>'.$i.'</option>';
            else
                echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
</select>
                     </div>
                     <div class="col-xs-4 col-md-4">
                      <label>Mes</label>
                      <select name="mes" class="form-control">
                         <option value="1">Ene</option>
                         <option value="2">Feb</option>
                         <option value="3">Marz</option>
                         <option value="4">Abril</option>
                         <option value="5">May</option>
                         <option value="6">Jun</option>
                         <option value="7">Jul</option>
                         <option value="8">Ago</option>
                         <option value="9">Sep</option>
                         <option value="10">Oct</option>
                         <option value="11">Nov</option>
                         <option value="12">Dic</option>
                      </select>
                        
                     </div>
                     <div class="col-xs-4 col-md-4">
                      <label>Año</label>
                         <select name="ano" class="form-control">
        <?php
        for($i=date('o'); $i>=1910; $i--){
            if ($i == date('o'))
                echo '<option value="'.$i.'" selected>'.$i.'</option>';
            else
                echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
</select>
                     </div>
                   </div>
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sexo :<small class="text-danger"> (Required)</small></label>
                   <div class="sexo">
                     
                   </div>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Tallas :<small class="text-danger"> (Required)</small></label>
                    <div class="talla"></div>
               </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Habilidades :</label>
                   <input type="text" class="form-control" name="habilidades" id="habilidades" onkeypress="return sololetras(event)" placeholder="Ingresar habilidad">   
                </div>

                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Hobbies :</label>
                   <input type="text" class="form-control" name="hobbies" id="hobbies" placeholder="Ingresar Hobbies" onkeypress="return sololetras(event)">   
                </div>
           </div>
           <div class="form-row">
             <div class="form-group col-md-6">
              <label for="#">Rol :<small class="text-danger"> (Required)</small></label>
              <div class="rol"></div>
             </div>
           </div>

           <div class="form-row">
                 <div class="form-group col-md-6">
                   <label for="#">Contraseña :<small class="text-danger"> (Required)</small></label>
                   <input type="password" class="form-control" name="contraseña"  id="password" placeholder="********" required="">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Confirmar contraseña :<small class="text-danger"> (Required)</small></label>
                   <input type="password" class="form-control" name="contraseña" id="rpassword" id="contraseña" placeholder="********" required="">

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
           <div class="form-row">
             <div class="form-group col-md-12 center-block" id="insertado">
               
             </div>
           </div>
             
           
           <div class="form-group">
             <button type="submit" id="btn" class="btn btn-danger" value = "registrar"><i class="fas fa-user-check"></i> Registrar</button>
           </div>
         </div>
</form>
 </div>
  <script type="text/javascript">
    $('form').submit(function(e){
      var datos = $('#formulario').serialize();
      e.preventDefault();
       $.ajax({
            type: 'post',
            url: 'Backend/Create_registro.php',
            data: datos,
            success: function(respuesta) {
              $("#error").hide();
              $("#divchearsisoniguales").hide();
               $("#insertado").html(respuesta);
            }
        })

    });
   
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

/*FIN DE VALIDACION DE CAMPO*/
/*-------INICIO DE CAMBIAR COLOR A LOS IMPUT*/
$(function() {
    $("#nombre").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('nombre').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#apellidos").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('apellidos').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});


$(function() {
    $("#email").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('email').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#cel").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('cel').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#facebook").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('facebook').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#twitter").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('twitter').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#habilidades").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('habilidades').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#hobbies").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('hobbies').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#password").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('password').value;
        if (capturado.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#rpassword").keyup(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('rpassword').value;
        if (capturado.length > 0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#institucion").click(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('institucion').value;
        if (capturado>0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
}); 

$(function() {
    $("#carrera").click(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('carrera').value;
        if (capturado>0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
}); 

$(function() {
    $("#exampleFormControlSelect1").click(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('exampleFormControlSelect1').value;
        if (capturado>0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
}); 

$(function() {
    $("#talla").click(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('talla').value;
        if (capturado>0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
});

$(function() {
    $("#rol").click(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('rol').value;
        if (capturado>0) {
            $(this).css(nuevoCSS);
        } else {
            $(this).css(error);
        }
    });
}); 

$(function() {
    $("#fecha").click(function() {
        var nuevoCSS = {
            "border": '1px solid #66ff33'
        };
        var error = {
            "border": '1px solid red'
        };
        var capturado = document.getElementById('fecha').value;
            $(this).css(nuevoCSS);
    });
}); 

 

  </script>
</body>
</html>

