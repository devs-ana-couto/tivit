<?php
get_header();
if(have_posts()) : while(have_posts()) : the_post();
?>


<!-- Section Banner -->

<section class="banner-cases-item">
    <div class="case-item-background" style="background: url('<?=the_field('banner_desktop');?>')">
        
    </div>
</section>


<?php
endwhile; endif;
get_footer();
?>