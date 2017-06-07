<?php get_header(); ?>

    <!--posts-->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <article id="post-<?php the_ID(); ?>" class="post">
<h2><?php the_title(); // get the page or posting title ?></h2>
        <small>Posted on <?php the_time('F j, Y'); // get the time ?> by <?php the_author(); // get the author name ?> in <?php the_category(', '); // get the category ?></small>
            <a href="<?php the_permalink(); //link to the page or posting ?>"><?php the_post_thumbnail('large'); ?></a>
<?php the_excerpt(); // get the posting's excerpt ?>
        </article>
<?php endwhile; endif; // end the loop ?>

    </div><!--end posts-->

<?php get_footer(); ?>
