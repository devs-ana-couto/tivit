<?php
/**
 * The Blog for our theme.
 *
 * Displays all posts
 *
 * @package WordPress
 * @subpackage Anacouto.Institucional.Theme
 * @since Anacouto.Institucional.Theme 1.0
 */
?>
<?php 
    include(ac_locate_template('header.php'));
?>                    

        <main class="quem-somos">
            
            <?php page_bulder_init($post->ID,$post,true);?>
            
        </main>

<?php  include(ac_locate_template('footer.php'));  