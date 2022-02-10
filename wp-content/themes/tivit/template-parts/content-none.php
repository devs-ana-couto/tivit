<section class="no-results not-found area">
  <div class="page-content">
    <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

      <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'vm50' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

    <?php elseif ( is_search() ) : ?>

      <br /><br /><br />
      <h2>Ops! Não conseguimos encontrar nenhum post. Tente novamente com outras palavras</h2>
      <br /><br /><br />

    <?php else : ?>

      <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'vm50' ); ?></p>

    <?php endif; ?>
  </div><!-- .page-content -->
</section><!-- .no-results -->
