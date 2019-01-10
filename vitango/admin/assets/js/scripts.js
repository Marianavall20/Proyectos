$(document).ready(function() {
	$('#star-rating').starrating();
});

/*function add_calificacion(id,tipo,id_calificador,id_calificado){
	alert($('#star-rating'+id).val())
	console.log(url)
	var add_cali = 'add_cali'
	var val_cali = $('#star-rating'+id).val()
	$.ajax({
        url: url+'/admin/controller.php',
        method: 'POST',
        data: {id:id, add_cali:add_cali, val_cali:val_cali, id_calificador:id_calificador, id_calificado:id_calificado},
        dataType: 'json'
    }).done(function(data){
        if(data.request){
        	alert('Calificación guardada con exito!')
        	location.href = url+'/admin/calificaciones/index.php?tipo='+tipo
        }else{
        	alert('No se guardo!');
        }
    }).fail(function(jqXHR, textStatus){
        console.log('Error en la respuesta' + textStatus)
    })
}*/
 