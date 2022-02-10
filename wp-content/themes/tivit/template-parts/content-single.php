<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
    echo '<p class="entry-date">' . get_the_date() . '</p>';
    the_content();
  ?>
</article><!-- #post-## -->
