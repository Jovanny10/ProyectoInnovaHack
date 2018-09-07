$(document).ready(function(){
    visualizarInstitucion();
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