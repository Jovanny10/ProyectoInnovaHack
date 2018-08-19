$(document).ready(function(){
    $('#pai').hide();
	$('#select').on('change',function(){
		var selectValor = '#'+$(this).val();
		if(selectValor == '#div4'){
			$('#pai').show();
		}else{
			$('#pai').hide();
		}
		

	});

});