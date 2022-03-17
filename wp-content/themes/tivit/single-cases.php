<?php
get_header();
require_once 'libs/Mobile_Detect.php';
$detect = new Mobile_Detect;

if(have_posts()) : while(have_posts()) : the_post();
?>


<!-- Section Banner -->
<section class="banner-cases-item">
    <div class="case-item-background" style="background: url('<? $detect->isMobile() ? the_field('banner_mobile') : the_field('banner_desktop'); ?>') no-repeat center center; background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="case-item-content">
                        <h2>Cases</h2>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="case-item-logos">
                        <div class="row">
                            <div class="col-4">
                                <img src="<? the_field('logo_01'); ?>" alt="">
                            </div>
                            <div class="col-7">
                                <img src="<? the_field('logo_02'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
endwhile; endif;
get_footer();
?>