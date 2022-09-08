<?php /* Template Name: Inovação */ ?>
<?php get_header(); ?>

<?php page_bulder_init(get_the_ID(), $post, true); ?>

    <!-- Bloco de Conteúdos -->
    <div id="contentTdx" class="home-content content-inovacao">
        <div id="triangle-down"></div>
        <?= do_shortcode('[ac-bloco-conteudo]'); ?>
    </div>
    </div>
<?php get_footer(); ?>