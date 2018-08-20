$(document).ready(function() {
    var formulario = document.getElementsByName('formulario')[0],
        elementos = formulario.elements,
        boton = document.getElementById('btn');
    var validarNombre = function(e) {
        if (formulario.nombre.value == 0 || formulario.nombre.value == null || /^\s+$/.test(nombre)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo nombre *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }
    var apellidos = function(e) {
        if (formulario.apellidos.value == 0 || formulario.apellidos.value == null || /^\s+$/.test(apellidos)) {
            $("#error").html("<div class='alert alert-danger'><i class='fa fa-close'></i>Favor de verificar el campo apellidos *!<button type = 'button' class = 'close' data-dismiss='alert' arial-label='Close'><span aria-hidden='true'>&times;</span></div>");
            e.preventDefault();
        }
    }
    var validar = function(e) {
        validarNombre(e);
        apellidos(e);
    };
    formulario.addEventListener("submit", validar);
});
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
$(function() {
    $("#nombre").keyup(function() {
        var nuevoCSS = {
            "border": '2px solid #66ff33'
        };

        var error = {
            "border": '2px solid red'
        };
        var capturado = document.getElementById('nombre').value;
        if (capturado.length > 2) {
            $(this).css(nuevoCSS);
        } else {
          $(this).css(error);
        }
    });
});