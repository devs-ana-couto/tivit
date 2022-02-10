<?php
$categorias = wp_get_post_categories( get_the_ID(), array( 'fields' => 'all_with_object_id') );
if ( isset( $categorias[0] ) ) {
  $categoria = '<p class="entry-category">#<a href="'.home_url('category/'.$categorias[0]->slug).'">'.$categorias[0]->name.'</a></p>';
} else {
  $categoria = '';
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
      echo $categoria;
      the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
      echo '<p class="entry-date">';
      the_date();
      echo ' às ';
      the_time('G\hi');
      echo '</p>';
    ?>
  </header><!-- .entry-header -->

  <div class="entry-content">
    <?php
      if ( has_post_thumbnail()) {
        echo '<div class="entry-featured-image">';
        the_post_thumbnail( 'medium', array('class' => 'featured-image') );
        echo '</div>';
      }
      the_content('<span class="entry-tag-titulo">VEJA MAIS</span>');
    ?>
  </div><!-- .entry-content -->

  <footer class="entry-footer">
    <?php
        the_tags( '<span class="entry-tag-tag">','</span><span class="entry-tag-tag">', '</span>');
        echo '<br/>';
        // echo do_shortcode('[fbcomments linklove="0"]');
    ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-## -->
