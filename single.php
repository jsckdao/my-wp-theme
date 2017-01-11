<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Terminal Lite
 */

get_header(); ?>

  <div class="content-area">
      <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('content', 'single'); ?>

      <?php endwhile; // end of the loop. ?>
  </div>

<?php get_footer(); ?>