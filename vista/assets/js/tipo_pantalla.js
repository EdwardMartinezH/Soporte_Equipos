$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../dao/listar_tipo_pantalla.php'
  })
  .done(function(listas_rep){
    $('#tipo_pantalla_id').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })


})