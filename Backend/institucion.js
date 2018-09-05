$(document).ready(function(){
	selectCarrera();
	selectGenero();
	selectTalla();
	selectRol();
});


function selectCarrera(){
	$.ajax({
		url:'Backend/Carrera.php',
		beforeSend:function(){
			$(".carrera").html("Mensaje: Procesando");
		},
		success:function(data){
			$(".carrera").html(data);
		}

	})
}

function selectGenero(){
	$.ajax({
		url:'Backend/sexo.php',
		beforeSend:function(){
			$(".sexo").html("Mensaje: Procesando");
		},
		success:function(data){
			$(".sexo").html(data);
		}
	})
}

function selectTalla(){
	$.ajax({
		url:'Backend/talla.php',
		beforeSend:function(){
			$(".talla").html("Mensaje: Procesando");
		},
		success:function(data){
			$(".talla").html(data);

		}
	})
}

function selectRol(){
	$.ajax({
		url:'Backend/rol.php',
		beforeSend:function(){
			$(".rol").html("Mensaje: Procesando");
		},
		success:function(data){
			$(".rol").html(data);
		}
	})
}



