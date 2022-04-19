<div class="gap">
    <div class="container">
        <div class="publiccloud position-relative">
            <div id="triangle-down"></div>
            <div>
                <img class="w-100 mask hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/mask.svg" alt="Mask" />
                <img class="w-100 mask hide-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/maskmobile.svg" alt="Mask" />
            </div>
            <div class="mainImage text-center m-auto">
                <img class="w-100 hide-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/publiccloud.jpg" alt="Public Cloud" />
                <img class="w-100 hide-desktop" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/publiccloudmobile.jpg" alt="Public Cloud" />
            </div>
            <div class="customCloudPosition position-absolute w-100">
                <div class="row custom-direction">
                    <div class="col-12 col-md-6 d-flex justify-content-end">
                    <div class="h-100">
                        <h2><? the_field('titulo_publicCloud'); ?></h2>
                        <p><? the_field('descricao_publicCloud'); ?></p>
                    </div>
                    </div>
                    <div class="col-12 col-md-6">
                    <div>
                        <img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/play.svg" alt="Play" />
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>