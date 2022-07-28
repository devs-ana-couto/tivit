<?php
get_header();
if(have_posts()) {
    while(have_posts()) {
        the_post();
?>
<main class="quem-somos" id="main-solutions">
    <?php page_bulder_init(get_the_ID(),$post,true);?>
</main>
<?php
    }
}
get_footer();
?>