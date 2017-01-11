<?php
/**
 * @package Terminal Lite
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>

  <header class="entry-header">
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <em><?php echo get_the_date(); ?></em>
  </header><!-- .entry-header -->

  <section class="entry-content">
      <?php
      if (has_post_thumbnail()) {
          echo '<div class="post-thumb">';
          the_post_thumbnail();
          echo '</div><br />';
      }
      ?>
      <?php the_content(); ?>
      <?php
      wp_link_pages(array(
          'before' => '<div class="page-links">' . __('Pages:', 'terminal-lite'),
          'after' => '</div>',
      ));
      ?>
  </section>

  <footer class="entry-meta">
      <?php the_category(__(', ', 'terminal-lite')); ?> <?php the_tags(', ', ', ', '<br />'); ?>
  </footer>

</article>

<!-- 多说评论框 start -->
<div class="ds-thread" data-thread-key="<?php echo the_id() ?>"
     data-title="<?php echo the_title() ?>" data-url="<?php echo curPageURL() ?>"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
    <script type="text/javascript">
      var duoshuoQuery = {short_name:"lookerlive"};
      (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0]
        || document.getElementsByTagName('body')[0]).appendChild(ds);
      })();
    </script>
<!-- 多说公共JS代码 end-->