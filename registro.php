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
	<form class="formulario" name="formulario" id="formulario" method="post" action="principal.php" onsubmit="return valida(this)">
    
		<div class="container">
      <div class="form-group">
        <h1 class="text-white">Datos personales</h1>
      </div>
			     <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Nombre *:</label>
                   <input type="text" class="input form-control" onkeypress="return sololetras(event)" name="usuario" id="nombre" placeholder="Ingresar el Nombre">
                </div>
                <div class="form-group col-md-6" id="nombre">
                   <label for="inputPassword4">Apellidos *:</label>
                   <input type="text" name="apellidos" class="form-control" id="apellidos" onkeypress="return sololetras(event)"  placeholder="Ingresar Apellidos">
                </div>
           </div>
           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Email *:</label>
                   <input type="email" class="form-control" required="" id="email" name="correo" placeholder="Labsol@gmail.com /Usuario registro">
                </div>
                <div class="" id="checkemailresponse"></div>
                <div class="form-group col-md-6">
                   <label for="#">Cel *:</label>
                   <input type="tel" class="form-control" name="cel" onkeypress="return solonumeros(event)" id="cel"  placeholder="953-155-01-93">
                </div>
           </div>
           <div class="form-row">
            <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Institución :</label>
                   <select class="form-control" id="select" name="institucion">
                        <option SELECTED>Seleccionar Institución</option>
                        <option >Tecnológico Nacional de Mexico</option>
                        <option >Universidad politecnica de zacatecas</option>
                        <option >Instituto Miguel Agustin Pro</option>
                        <option value="div4" id="div4">Otro..</option>
                   </select>
           </div>
                 
           </div>

           <div class="form-row">
                <div class="form-group col-md-6" id="pai">
                    <label for="#">Otra institucion :</label>
                   <input type="text" class="form-control" name="otro" id="" onkeypress="return sololetras(event)" placeholder="Universidad politécnica del centro">
                </div>
           </div>

           <div class="form-row" >
                <div class="form-group col-md-6">
                   <label for="#">Facebook *:</label>
                   <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Carrera :</label>
                   <input type="text" class="form-control" name="carrera" onkeypress="return sololetras(event)"  id="carrera" placeholder="Ingresar Carrera">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="#">Twitter :</label>
                   <input type="text" class="form-control" name="twitter"  id="twitter" placeholder="Ingresar cuenta">
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Fecha de Nacimiento *:</label>
                   <input type="date" class="form-control" name="fecha"  id="fecha" placeholder="00/ 00 / 00">
                </div>
                
           </div>

           <div class="form-row">
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Sexo *:</label>
                   <select class="form-control" name="sexo" id="exampleFormControlSelect1" required>
                        <option>Seleccionar</option>
                        <option>Hombre</option>
                        <option>Mujer</option>
                   </select>
                </div>
                <div class="form-group col-md-6">
                   <label for="exampleFormControlSelect1">Tallas :</label>
                   <select class="form-control" name="talla" id="seleccionar" name="seleccionar">
                        <option>Seleccionar talla</option>
                        <option>XCH</option>
                        <option>CH</option>
                        <option>M</option>
                        <option>G</option>
                        <option>XG</option>
                        <option>XXG</option>
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
                   <label for="#">Contraseña *:</label>
                   <input type="password" class="form-control" name="contraseña"  id="password" placeholder="********" >
                </div>
                <div class="form-group col-md-6">
                   <label for="#">Confirmar contraseña *:</label>
                   <input type="password" class="form-control" name="contraseña" id="rpassword" id="contraseña" placeholder="********">

                </div> 
           </div>
           <div class="form-row">
                 <div class="form-group col-md-6" id="error">
                   
                </div>
                <div class="form-group col-md-6" id="divchearsisoniguales">
                   
                </div>
                 
           </div>

  <button type="submit" id="btn" class="btn btn-danger">Registrar</button>
</div>
</form>
  <script type="text/javascript">
    $(document).ready(function() {
    $('form').submit(function() {
        $.ajax({
            type: 'post',
            url: 'principal.php',
            data: $("#formulario").serialize(),
            success: function(data) {}
        })
    });
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
$(document).ready(function() {
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
    var facebook = function(e) {
        if (formulario.facebook.value.length <= 2 || formulario.facebook.value == null || /^\s+$/.test(facebook)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo facebook *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }
    var cel = function(e) {
        if (formulario.cel.value.length != 10 || formulario.cel.value == null) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo cel *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }
    var carrera = function(e) {
        if (formulario.carrera.value.length <= 2 || formulario.carrera.value == null || /^\s+$/.test(carrera)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo carrera *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }
    var twitter = function(e) {
        if (formulario.twitter.value.length <= 2 || formulario.twitter.value == null || /^\s+$/.test(twitter)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo twitter *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }
    var habilidades = function(e) {
        if (formulario.habilidades.value.length <= 2 || formulario.habilidades.value == null || /^\s+$/.test(habilidades)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo habilidades *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }
    var hobbies = function(e) {
        if (formulario.hobbies.value.length <= 2 || formulario.hobbies.value == null || /^\s+$/.test(hobbies)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo hobbies *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }

    function validar(e) {
        validarNombre(e);
        apellidos(e);
        cel(e);
        facebook(e);
        carrera(e);
        twitter(e);
        habilidades(e);
        hobbies(e);
    };
    formulario.addEventListener("submit", validar);
});
/*------------------FIN DE VALIDACION DE CAMPOS DEL FORMULARIO ------------------*/
/*--------------INICIO VALIDACION DE CONTRASENA-------------- */
$(document).ready(function() {
    $('#pai').hide();
    $('#select').on('change', function() {
        var selectValor = '#' + $(this).val();
        alert(selectValor);
        if (selectValor == '#div4') {
            $('#pai').show();
        } else {
            $('#pai').hide();
        }
    });
});
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
/*------------INICIO DE CAMPOS CORRECTOS CON COLOR VERDE -------------*/
$(function() {
    $("#nombre").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
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
/*-------   FIN DE CAMPOS CORRECTOS CON COLOR VERDE-------*/
  </script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

