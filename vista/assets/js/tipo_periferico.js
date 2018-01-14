$(document).ready(function(){
  $.ajax({
    type: 'POST',
    url: '../dao/listar_tipo_periferico.php'
  })
  .done(function(listas_rep){
    $('#tipo_periferico').html(listas_rep)
  })
  .fail(function(){
    alert('Hubo un errror al cargar las listas_rep')
  })


})