<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Terminal Lite
 */

get_header(); ?>

  <div class="content-area article-list">
      <?php if (have_posts()) : ?>
        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
        </header><!-- .page-header -->
          <?php /* Start the Loop */ ?>
          <?php while (have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?>
          <?php the_posts_pagination(); ?>
      <?php else : ?>
          <?php get_template_part('no-results', 'archive'); ?>
      <?php endif; ?>
  </div>
<?php get_footer(); ?>