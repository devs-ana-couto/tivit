/*
 * Javascript para filtras automaticamente as selecoes de categoria e etiqueta
 * categoria tem usar class conteudo_categoria / conteudo_categoria_mobile
 * etiqueta tem usar class conteudo_etiqueta / conteudo_etiqueta_mobile
 */
function ac_conteudo_selecao(nova_etiqueta) {
   var categoria = jQuery('.conteudo_categoria option:selected').val();
   if (nova_etiqueta == 'todos') {
      jQuery('.conteudo_etiqueta').removeClass('active');
      jQuery('.conteudo_etiqueta_todos').addClass('active');
   } else {
      if (jQuery('.conteudo_etiqueta_' + nova_etiqueta).hasClass('active')) {
         jQuery('.conteudo_etiqueta_' + nova_etiqueta).removeClass('active');
      } else {
         jQuery('.conteudo_etiqueta_' + nova_etiqueta).addClass('active');
         jQuery('.conteudo_etiqueta_todos').removeClass('active');
      }
      var etiqueta = '';
      jQuery('.conteudo_etiqueta.active').each(function() {
         var aux = jQuery(this).attr('data-conteudo');
         if (aux != '') {
            if (etiqueta != '') {
               etiqueta += ',' + aux;
            }
         }
      });
      if (etiqueta == '') {
         jQuery('.conteudo_etiqueta_todos').addClass('active');
      }
   }
   var data = {
      action: 'ac_pagina_conteudo_pesquisa_desktop',
      pagina: 1,
      categoria: categoria,
      etiqueta: etiqueta,
   };
   jQuery.post(referenciaTivit.tivitAjaxUrl, data, function (response) {
      jQuery('#conteudo-variavel-desktop').html(response);
   });

   categoria = jQuery('.conteudo_categoria_mobile option:selected').val();
   var etiquetas = jQuery('.conteudo_etiqueta_mobile').val();
   etiqueta = '';
   for (var x = 0; x < etiquetas.length; x++) {
      if (etiqueta != '') {
         etiqueta += ',' + etiquetas[x];
      } else {
         etiqueta = etiquetas[x];
      }
      console.log(etiquetas[x], etiqueta);
   }
   var data = {
      action: 'ac_pagina_conteudo_pesquisa_mobile',
      pagina: 1,
      categoria: categoria,
      etiqueta: etiqueta,
   };
   jQuery.post(referenciaTivit.tivitAjaxUrl, data, function (response) {
      jQuery('#conteudo-variavel-mobile').html(response);
   });

}