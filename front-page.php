<?php get_header(); ?>
    
<p>This is the front-page</p>

      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    
<!-- blueberry images -->

    <div class="blueberry">
      <ul class="slides">
        <li><img src="<?php bloginfo('template_directory'); ?>/images/barrels.jpg" alt="barrels"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/bottles.jpg" alt="botles"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/grapes.jpg" alt="grapes"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>images/pairing.jpg" alt="pairings"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/tasting.jpg" alt="tasting"></li>
        <li><img src="<?php bloginfo('template_directory'); ?>/images/vineyard.jpg" alt="vineyard"></li>
      </ul>
    </div>

<!-- blueberry JS-->

<script src="/js/lightbox-plus-jquery.js" type="text/javascript"></script>	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="/js/jquery.blueberry.js"></script>

<script>
$(window).load(function() {
	$('.blueberry').blueberry();
});
</script>
    
<!-- end blueberry -->


<?php get_sidebar();?>

<?php get_footer(); ?>