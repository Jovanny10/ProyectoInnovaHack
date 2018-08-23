$(document).ready(function() {
    $('form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'principal.php',
            data: $("#formulario").serialize(),
            success: function(data) {
                $('#divchearsisoniguales').html(data);
            }
        })
    });
});