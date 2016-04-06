jQuery(document).ready(function($){
       $('#VerMas').click(function(event) {
       	 event.preventDefault();
       	 $('#masInfo').removeClass('hidden');
       	 $('#masInfo').addClass('show');
       });;
});

jQuery(document).ready(function($){
       $('.vercuestionario').click(function(event) {
       	 event.preventDefault();
       	 var href = $(this).attr('href');
       	   $.ajax({
                url:   href,
                method:  'get',
                
                error: function(e) {
                    alert('Error' + e.toString());
                    
                },
                beforeSend: function () {
                        
                },
                success:  function (response) {
                        //$("#decide").fadeOut();
                       $("#muestra_cuestionario").html(response);
                        //$("#fila_"+$('#elcuit').val()).fadeOut();
                        
                }
        });
       
       //Ubico el foco en este div
       $('html, body').animate({
        scrollTop: $("#muestra_cuestionario").offset().top
   		 }, 1000);
       
       });
});

jQuery(document).ready(function($){
       $('#alta_paciente').click(function(event) {
         event.preventDefault();
         //$.ajaxSetup({
           // headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
         //});
        var datos = $('#form-alta-paciente').serialize();
        var action = $('#form-alta-paciente').attr('action');
        $.ajax({
          url: action,
          type: 'POST',
          data: datos,
          error: function(e) {
                  alert('Error' + e.toString());
                    
                },
          beforeSend: function () {
                  $("#mensajes_ajax").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
          success:  function (response) {
                 $("#mensajes_ajax").html(response);
                        
                }
        })
        //Ubico el foco en este div
       $('html, body').animate({
        scrollTop: $("#mensajes_ajax").offset().top
       }, 1000);
        
      });;
});

jQuery(document).ready(function($){
       $('#alta_control').click(function(event) {
         event.preventDefault();
         
        var datos = $('#form-alta-control').serialize();
        var action = $('#form-alta-control').attr('action');
        $.ajax({
          url: action,
          type: 'POST',
          data: datos,
          error: function(e) {
                  alert('Error' + e.toString());
                    
                },
          beforeSend: function () {
                  $("#mensajes_ajax").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
          success:  function (response) {
                 $("#mensajes_ajax").html(response);
                        
                }
        })
        //Ubico el foco en este div
       $('html, body').animate({
        scrollTop: $("#mensajes_ajax").offset().top
       }, 1000);
        
      });;
});

jQuery(document).ready(function($){
       $('#edita_paciente').click(function(event) {
         event.preventDefault();
         
        //alert('anduvo');
		var datos = $('#form-edit-paciente').serialize();
        var action = $('#form-edit-paciente').attr('action');
        $.ajax({
          url: action,
          type: 'POST',
          data: datos,
          error: function(e) {
                  alert('Error' + e.toString());
                    
                },
          beforeSend: function () {
                  $("#mensajes_ajax").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
          success:  function (response) {
                 $("#mensajes_ajax").html(response);
                        
                }
        })
        //Ubico el foco en este div
       $('html, body').animate({
        scrollTop: $("#mensajes_ajax").offset().top
       }, 1000);
        
      });;
});

jQuery(document).ready(function($){
       $('#edita_control').click(function(event) {
         event.preventDefault();
         
        //alert('anduvo');
		var datos = $('#form-edit-control').serialize();
        var action = $('#form-edit-control').attr('action');
        $.ajax({
          url: action,
          type: 'POST',
          data: datos,
          error: function(e) {
                  alert('Error' + e.toString());
                    
                },
          beforeSend: function () {
                  $("#mensajes_ajax").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
          success:  function (response) {
                 $("#mensajes_ajax").html(response);
                        
                }
        })
        //Ubico el foco en este div
       $('html, body').animate({
        scrollTop: $("#mensajes_ajax").offset().top
       }, 1000);
        
      });;
});

jQuery(document).on('click',".btn-eliminar",function(event)
{
    event.preventDefault();
    //alert('anduvo');
    var id_a_eliminar = $(this).parents('tr').data('id');
    var formulario = $('#form-delete-paciente');
    var la_url = formulario.attr('action')+'/'+id_a_eliminar;

    $.ajax({
      url: la_url,
      type: 'POST',
      data: formulario.serialize(),
      error: function(e) {
                  alert('Error' + e.toString());
                    
                },
      beforeSend: function () {
                  
                  $("#mensajes_ajax").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
      success:  function (response) {
                 $("#mensajes_ajax").html(response);
                 
                }
    })

    $(this).parents('tr').fadeOut('slow');  
  
});

jQuery(document).on('click',".btn-eliminar_control",function(event)
{
    event.preventDefault();
    //alert('anduvo');
    var id_a_eliminar = $(this).parents('tr').data('id_control');
    var formulario = $('#form-delete-control');
    var la_url = formulario.attr('action')+'/'+id_a_eliminar;

    $.ajax({
      url: la_url,
      type: 'POST',
      data: formulario.serialize(),
      error: function(e) {
                  alert('Error' + e.toString());
                    
                },
      beforeSend: function () {
                  
                  $("#mensajes_ajax").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
      success:  function (response) {
                 $("#mensajes_ajax").html(response);
                 
                }
    })

    $(this).parents('tr').fadeOut('slow');  
  
});






/*jQuery(document).ready(function($){
  $('#eliminar_paciente').click(function(event) {
    event.preventDefault();
    var id_a_eliminar = $(this).parents('tr').data('id');
    var formulario = $('#form-delete-paciente');
    var la_url = formulario.attr('action')+'/'+id_a_eliminar;

    $.ajax({
      url: la_url,
      type: 'POST',
      data: formulario.serialize(),
      error: function(e) {
                  alert('Error' + e.toString());
                    
                },
      beforeSend: function () {
                  
                  $("#mensajes_ajax").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
      success:  function (response) {
                 $("#mensajes_ajax").html(response);
                 
                }
    })

    $(this).parents('tr').fadeOut('slow');  
  });;
});*/


jQuery(document).ready(function($){
    $('input[name=paciente_desde]').datetimepicker({
        format:'Y-m-d',
        timepicker: false,
        lang:'es'
    }); 
});

jQuery(document).ready(function($){
    $('input[name=fecha_control]').datetimepicker({
        format:'Y-m-d',
        timepicker: false,
        lang:'es'
    }); 
});


jQuery(document).ready(function($) {
  $('#busca_paciente').click(function(event) {
    event.preventDefault();
    var elcriterio = $('.criterio').val();
    var formulario = $('#form_busca_paciente');
    var la_url = formulario.attr('action')+'/'+elcriterio;

    if (elcriterio!="") {

         $.ajax({
      url: la_url,
      type: 'POST',
      data: formulario.serialize(),
      error: function(e) {
                  alert('Error' + e.toString());
                    
                },
      beforeSend: function () {
                  //$("#resultados_ajax").fadeIn();
                  $("#listado_pacientes > tbody").html("<img class='img-responsive center-block' style='margin: 0 auto;' src='http://www.silviamendoza.com.ar/AppNutri/public/img/gif-load.gif'>");
                },
      success:  function (response) {
                 $("#listado_pacientes > tbody").hide().html(response).fadeIn('slow');
                }
      })
    };

   
  });;
});
