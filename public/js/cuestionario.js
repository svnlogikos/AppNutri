jQuery(document).ready(function($){
       $('#alta_cuestionario_paciente').click(function(event) {
         event.preventDefault();
         //$.ajaxSetup({
           // headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
         //});
        var datos = $('#form_alta_cuestionario').serialize();
        var action = $('#form_alta_cuestionario').attr('action');
        $.ajax({
          url: action,
          type: 'POST',
          data: datos,
          error: function(e) {
                  alert('Error' + e.toString());
                    
                },
          beforeSend: function () {
                  //$("#resultados_ajax").fadeIn();
                  //$("#resultados_ajax").html("<img src='http://app_insumos_pre/public/theme/ajax-loader.gif'>");
                },
          success:  function (response) {
                 $("#mensajes_ajax").html(response);
                        
                }
        })
        
        //Ubico el foco en este div
       $('html, body').animate({
        scrollTop: $("#mensajes_ajax").offset().top
       }, 500);

      });;
});