<?php /* Template Name: Pessoas e Carreiras */ ?>
<?php get_header(); ?>

<!-- Hero banner-->
<div class="pec-hero position-relative">
  <div class="pec-hero-title">
    <div class="container">
      <div class="row">
        <div class="col-12">
            <div class="zindex position-relative">
                <h1>PESSOAS E CARREIRAS</h1>
                <h2 class="">Vem Transformar</h2>
                <div class="buttoncta">
                  <a>Quero ver as vagas</a>
                </div>
            </div>
            <div class="customMargin d-flex justify-content-center align-items-center">
                <img class="mask w-100 position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/esg/v_slider_home.svg" alt="mask" />
                <p class="customNumbers">Números de <br /> setembro de 2021</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="pecCounter" class="lp-tbanks-conheca">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <div class="lp-tbanks-credibilidade text-center">
          <div class="row">
            <div class="col-12 col-md-4">
              <p class="w-100 position-relative">
                <span>
                  <b>3,8</b>
                </span>
                <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/glassdoor.svg" width="60" alt="Glass Door" />
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Nota Glassdoor
                  </p>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <p class="w-100 position-relative">
                <span>78%</span>
                <img class="tag position-absolute" src="<?php echo get_template_directory_uri(); ?>/assets/images/pessoas-e-carreiras/greatplace.svg" width="60" alt="Great place to work tag" />
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Recomendaria para um amigo
                  </p>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <p>
                <span>50%</span>
              </p>
              <div class="w-100 d-flex justify-content-center align-items-center">
                  <p class="custom-text">
                    Das vagas preenchidas com promoção interna
                  </p>
              </div>
            </div>  

          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<div id="pecConheca" class="lp-tbanks-conheca">
    <div class="container">
        <div class="lp-tbanks-arrow text-center mb-5">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/landing/tbanks/icons/seta-red.svg" class="bounce" alt="Tbanks Saiba Mais">
        </div>
        <div class="row">
            <div class="col-12">

                <div class="lp-tbanks-conheca-content">
                    <p>
                      O seu futuro é colaborar com a gente na transformação das maiores empresas do país e do mundo. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>