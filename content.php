<?php
/**
 * @package Terminal Lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
    <em><?php echo get_the_date(); ?></em>
  </header>

    <?php if (is_search() || !is_single()) : // Only display Excerpts for Search ?>
      <section class="entry-summary">
        <div class="post-thumb"><?php the_post_thumbnail('medium', array('class' => 'alignleft')); ?></div>
          <?php the_excerpt(); ?>
      </section>
    <?php else : ?>
      <section class="entry-content">
        <div class="post-thumb"><?php the_post_thumbnail(); ?>
            <?php the_content(__('Continue reading <span class="meta-nav">&rarr;</span>', 'terminal-lite')); ?>
            <?php
            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'terminal-lite'),
                'after' => '</div>',
            ));
            ?>
      </section><!-- .entry-content -->
    <?php endif; ?>

</article>
