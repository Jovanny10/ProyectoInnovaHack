$(document).ready(function(){
    visualizarInstitucion();
    visualizarCarrera();
})


function visualizarInstitucion(){
	 $('form').ready(function(){
      var datos = $('#guardarDatos').serialize();
       $.ajax({
            type: 'post',
            url: 'Backend/institucion.php',
            data: datos,
            beforeSend:function(c){
             $("#institucion").html("Procesando....");
            },
            success: function(respuesta) {
             $("#institucion").html(respuesta);

            }
        })
     });
}


function visualizarCarrera(){
    $('form').ready(function(){
        var datos = $('#guardarDatoscarrera').serialize();
        $.ajax({
            type:'post',
            url:'Backend/Carrera.php',
            data:datos,
            beforeSend:function(r){
                $("#car").html("Procesando....");

            },
            success:function(respuesta){
                $("#car").html(respuesta);
                
            }

        })
    })
}