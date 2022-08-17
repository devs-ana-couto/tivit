<?php
/*
 * Page Builder Componentes
 * AC / Conteudo Relacionado
*/

function pb_ac_conteudo_relacionado($obj_id,$obj = null, $block, $echo = true){
	global $detect;
	$generate_element = "";
	$c_title = get_sub_field('gd-el-simple-content');
	$c_title_clean = strip_tags($c_title);
	$c_formulario = get_sub_field('gt-el-simple-contact-form');

	$s_color_background = get_sub_field('gd-el-simple-background-color');
	$s_img_background_array = get_sub_field('gd-el-simple-background-image');
	$s_img_background_mobile_array = get_sub_field(' gd-el-simple-background-image-mobile');
	$s_img_background = $detect->isMobile() ? $s_img_background_mobile_array['url'] :  $s_img_background_array['url'];

	$css_id_object =  get_sub_field('gd-el-simple-id');
	$css_content =  get_sub_field('gd-el-simple-css');
	if(empty($css_id_object)){
		$css_id_object = 'element-formulario-'.$obj_id;
	}
	$div_el = '#'.$css_id_object;

	// $t_color_font = set_font_color($div_el.' h1',$s_color_font);
	// $t_color_font .= set_font_color($div_el.' p',$s_color_font);
	// $t_color_font .= set_font_color($div_el,$s_color_font);
	// $t_color_background = set_background_mask($div_el,$s_color_background,$s_img_background);
	if(empty($s_color_background)){
		$s_color_background = "#FFF";
	}
	$t_color_background = $div_el.'{background-image: url(\''.$s_img_background.'\'); background-repeat:no-repeat; background-position:center center; background-size: cover; background-color:'.$s_color_background.'}';

	$t_margin_and_padding = "";
	if(!$m_default_margin){
		$t_margin_and_padding = set_margin_personalized($m_personalized_margin, $div_el);
	}


	$template = '
		<!---- AC: Conteudo Relacionado Module -->
		<style>
			'.$t_color_background.'
			'.$t_margin_and_padding.'

			/* CSS Personalized */

				{css_content}

			/* CSS: END Personalized */
		</style>
<div id="main-solutions">
<div id="contentServices" class="home-content content-inovacao">
  <div id="triangle-down"></div><!-- Triangle Down -->
  <div class="container pd">
    <div class="title">
      <h2 class="titleText text-center">CONTEÚDOS RELACIONADOS</h2>
    </div>

    <div class="row hide-mobile">
      <!-- content 1 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1">
          <div class="img position-relative">
            <img src="https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/home/artigo1.png" alt="Depoimento">
            <div class="position-absolute tagContent">artigo</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 1 -->

      <!-- content 2 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1">
          <div class="img position-relative">
            <img src="https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/home/artigo2.png" alt="Depoimento">
            <div class="position-absolute tagContent">press release</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 2 -->
      <!-- content 3 -->
      <div class="col-12 col-md-4">
        <div class="cardContent p-1">
          <div class="img position-relative">
            <img src="https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/home/artigo3.png" alt="Depoimento">
            <div class="position-absolute tagContent">artigo</div>
          </div>
          <div class="detalhes">
            <span>01/01/2021</span>
            <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
          </div>
          <div class="content">
            <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
          </div>
          <div class="autor-time w-100">
            <div class="d-flex flex-row align-items-center">
              <a href="#">conta híbrida</a>
              <a href="#">varejo</a>
            </div>
            <p>6 minutos de leitura</p>
          </div>
          <div class="acessar">
            <a href="#">acessar artigo</a>
          </div>
        </div>
      </div>
      <!-- // content 3 -->
    </div>

    <!-- mobile slide -->
    <div class="row mx-auto my-auto justify-content-center hide-desktop">
      <div id="contentMobileCarousel" class="carousel slide p-0" data-bs-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="carousel-item heroslide4 content active">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/home/artigo1.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row aaa">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/home/artigo2.png" alt="Depoimento">
                        <div class="position-absolute tagContent">press release</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="carousel-item heroslide4 content">
                  <div class="col-11 m-0 p-0">
                    <div class="cardContent p-2">
                      <div class="img position-relative">
                        <img src="https://www.anacouto.com.br/staged/tivit/wp-content/themes/tivit/assets/images/home/artigo3.png" alt="Depoimento">
                        <div class="position-absolute tagContent">artigo</div>
                      </div>
                      <div class="detalhes">
                        <span>01/01/2021</span>
                        <p class="m-0 h-100">Por <b>Ana Helena Lazaroni</b></p>
                      </div>
                      <div class="content">
                        <h3>título do artigo 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                      </div>
                      <div class="autor-time w-100">
                        <div class="d-flex flex-row align-items-center">
                          <a href="#">conta híbrida</a>
                          <a href="#">varejo</a>
                        </div>
                        <p>6 min. de leitura</p>
                      </div>
                      <div class="acessar">
                        <a href="#">acessar artigo</a>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

  </div>
</div>
</div>

	';

	// $content = '
	// 	<div class="image-area for-mobile" data-aos-delay="800" data-aos="fade-down" data-aos-anchor="#banner-home-{id}" >
	// 		<img src="{img}" alt="{c_title_clean}">
	// 	</div>
	// 	<div class="clear w100 block"></div>

	// 	{c_title}

	// 	{c_button}

	// 	<div class="image-area for-device" data-aos-delay="800" data-aos="fade-left">
	// 		<img src="{img}" alt="{c_title_clean}">
	// 	</div>';

	// $button = '<a href="{c_button_link}" target="{c_button_target}" class="btn {css_button} read-more"><b>{c_button_tittle}</b></a>';
	// if($c_button_remove){
	// 	$button = "";
	// }

			// $generate_button =
			// 	str_replace(
			// 		array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}'),
			// 		array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button),
			// 		$button);


			// $generate_content =
			// 	str_replace(
			// 		array('{c_button_tittle}','{c_button_link}','{c_button_target}','{c_title}','{c_title_clean}','{img}','{id}','{css_button}','{c_button}'),
			// 		array($c_button_tittle,$c_button_link,$c_button_target,$c_title,$c_title_clean,$c_image['url'],$obj_id,$css_button,$generate_button),
			// 		$content);

			$generate_element =
				str_replace(
					array('{id}','{css_content}','{css_id_object}','{s_color_of_menu}','{c_position}','{content}','{s_img_background}','{c_title}','{c_button_link}','{c_button_target}','{c_button_tittle}','{c_button}','{c_form}'),
					array($obj_id, $css_content,$css_id_object,$s_color_of_menu,$c_position,$generate_content,$s_img_background,$c_title,$c_button_link,$c_button_target,$c_button_tittle,$c_button,$c_form),
					$template);

			if($echo){
				echo $generate_element;
			}

		// endwhile;
	// endif;

	return $generate_element;
}