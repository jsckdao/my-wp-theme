<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Terminal Lite
 */
?>

<?php wp_enqueue_script('myblog-prettify', get_template_directory_uri().'/js/prettify/prettify.js'); ?>
<script>
  window.document.addEventListener('load', function() { window.prettyPrint && prettyPrint(); }, true);
</script>

<?php wp_footer(); ?>

</body>
</html>