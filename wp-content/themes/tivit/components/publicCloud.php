<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
      <iframe src="https://player.vimeo.com/video/<?the_field('link_video_publicCloud');?>?h=7eff968989" width="100%" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->


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
                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
                                <img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/play.svg" alt="Play" />
                            </a>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>