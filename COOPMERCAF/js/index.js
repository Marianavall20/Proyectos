$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: 'php/cargar_listas.php'
  })
  .done(function(listas_rep){
    $('#departamento').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar los departamentos')
  })

  $('#departamento').on('change', function(){
    var id = $('#departamento').val()
    $.ajax({
      type: 'POST',
      url: 'php/cargar_videos.php',
      data: {'id': id}
    })
    .done(function(listas_rep){
      $('#videos').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los municipios')
    })
  })

  $('#enviar').on('click', function(){
    var resultado = 'Lista de reproducción: ' + $('#departamento option:selected').text() +
    ' Video elegido: ' + $('#videos option:selected').text()

    $('#resultado1').html(resultado)
  })

})