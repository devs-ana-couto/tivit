jQuery(document).ready(function ($) {
   var contador = 1;
   $('#post').submit(function (e) {
      $("label:contains('Posição no Layout')").each(function () {
         var quem = $(this).attr('for');
         // console.log(quem);
         // $('#' + quem).val(contador);
         $('#' + quem + ' option[value=' + contador+']').attr('selected', 'selected');
         contador++;
      });
      // return false;
   });
});