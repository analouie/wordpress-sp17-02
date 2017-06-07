<?php

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

    <!--posts-->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
<h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
<?php the_content(''); // get page or posting written content ?>
<?php endwhile; endif; // end the loop ?>


    <!--end posts-->

<aside id="secondary" class="widget-area" role="complementary">
    
        <h2>Sub Navigation</h2>
<ul>
<li><a href="#">Logos</a></li>
<li><a href="#">Prints</a></li>
<li><a href="#">Websites</a></li>
</ul>
    
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

    
</aside><!-- #secondary -->


    <div id="sub-navigation" class="widget">
<?php if (is_page()) : // if we are in "pages"... ?>
<h2 class="sub-navigation-title">
<?php echo get_the_title($post->post_parent); // ...get the gateway page title ?></h2>
<ul class="sub-navigation-items"><?php  if ($post->post_parent) { // if the page has a parent...
wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title
} else { // if the page does not have a parent...
wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title
} ?></ul>
<?php endif; // end if we are in "pages" ?>
<?php if (!(is_page())) : // if we are not in "pages"... ?>
<h2 class="sub-navigation-title">Blog</h2>
<ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => __(''))); // ...list the categories with no title ?></ul>
<?php endif; ?>
        
    </div>