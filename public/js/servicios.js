$( document ).ready(function() {
    $('#reiniciar').click(function(){
        location.reload();
    });
    
    $('#buscar').click(function(){
        $('#buscar').attr('disabled', true);
        $('#mensajes').removeClass('alert alert-danger alert alert-success' )
        var dato= $('#dato').val();
        if(dato!=''){
          $.ajax({
              type: 'GET',
              url: '/servicio/'+dato,
              dataType: 'json',
              timeout: 3000,
              success: function (data) {
                  $('#buscar').attr('disabled', false);
                  $('#tablaempleados tr').remove();
                  $("#tablaempleados tr").detach();
                  $('#paginador').remove();
                  var datos_tabla='<thead><tr><th>Nombre</th>';
                  datos_tabla+='<th>Apellido Paterno</th>';
                  datos_tabla+='<th>Apellido Materno</th>';
                  datos_tabla+='<th>Fecha de Nacimiento</th>';
                  datos_tabla+='<th>Ingresos</th></tr></thead>';
                  if($.isArray(data)){
                    console.log(data);
                    $.each(data, function( index, value ) {
                      mensajes+=value+'<br/>';
                      datos_tabla+='<tr><td>'+value['nombre']+'</td>';
                      datos_tabla+='<td>'+value['apellido_paterno']+'</td>';
                      datos_tabla+='<td>'+value['apellido_materno']+'</td>';
                      datos_tabla+='<td>'+value['datos']['fecha_nacimiento']+'</td>';
                      datos_tabla+='<td>'+value['datos']['ingresos']+'</td></tr>';
                    });
                    $('#tablaempleados').append(datos_tabla);
                  }else{
                    datos_tabla+='<tr><td>'+data['nombre']+'</td>';
                    datos_tabla+='<td>'+data['apellido_paterno']+'</td>';
                    datos_tabla+='<td>'+data['apellido_materno']+'</td>';
                    datos_tabla+='<td>'+data['datos']['fecha_nacimiento']+'</td>';
                    datos_tabla+='<td>'+data['datos']['ingresos']+'</td></tr>';
                    $('#tablaempleados').append(datos_tabla);
                  }
              },
              error: function (data) {
                  $('#mensajes').addClass('alert alert-danger');
                  $('#mensajes').html('Error al procesar la solicitud');
                  console.log('Error:', data);
              }
          });
        }
    });
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
