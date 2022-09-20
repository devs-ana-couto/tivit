<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <script src="https://www.youtube.com/iframe_api"></script>
        <div id="player"></div>
      </div>
    </div>
  </div>
</div>



<div class="gap" style="background: <?=the_field('cor_de_fundo_publicCloud');?>">
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
                            <button class="open" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> 
                                <img class="w-auto" src="<?php echo get_template_directory_uri(); ?>/assets/images/solucoes/play.svg" alt="Play" />
                            </button>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var player, iframe;
var $ = document.querySelector.bind(document);

// init player
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '400',
    width: '100%',
    videoId: '<?php the_field('link_video_publicCloud')?>',
    events: {
      'onReady': onPlayerReady
    }
  });
}

// when ready, wait for clicks
function onPlayerReady(event) {
  var player = event.target;
  iframe = $('#player');
  setupListener(); 
}

function setupListener (){
$('button.open').addEventListener('click', playFullscreen);
}

function playFullscreen (){
  player.playVideo();//won't work on mobile
  
  var requestFullScreen = iframe.requestFullScreen || iframe.mozRequestFullScreen || iframe.webkitRequestFullScreen;
  if (requestFullScreen) {
    requestFullScreen.bind(iframe)();
  }
}
</script>