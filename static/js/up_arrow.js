//Javascript para flecha ir hacia arriba

//Se ejecuta hasta que el documento cargue completamente
$(document).ready(function () {  

//Función para ir arriba
  $('.ir-arriba').click(function () {
    $('body,html').animate({ scrollTop: '0px'}, 300);
  });

//Indica cuando aparece la flecha
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) { 
      $('.ir-arriba').slideDown(300);
    }
    else{
      $('.ir-arriba').slideUp(300);
    }
  });  
});