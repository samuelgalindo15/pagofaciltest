$( document ).ready(function() {
    $('#guardar').click(function(){
        $('#guardar').attr('disabled', true);
        $('#mensajes').removeClass('alert alert-danger alert alert-success' )
        $.ajax({
            type: 'POST',
            url: '/servicio',
            data: $('#servicio').serialize(),
            dataType: 'json',
            timeout: 3000,
            success: function (data) {
                $('#guardar').attr('disabled', false);
                if(data['valido']==true){
                  $('#mensajes').addClass('alert alert-success');
                  $('#mensajes').html('Se ha guardado la información correctamente');
                  $('#servicio')[0].reset();
                }else{
                  var mensajes='';
                  $('#mensajes').addClass('alert alert-danger');
                  $.each(data['errores'], function( index, value ) {
                      mensajes+=value+'<br/>';
                  });
                  $('#mensajes').html(mensajes);
                }
                $('#mensajes').show();
            },
            error: function (data) {
                $('#mensajes').addClass('alert alert-danger');
                $('#mensajes').html('Error al procesar la solicitud');
                console.log('Error:', data);
            }
        });
    });
});
