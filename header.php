<!DOCTYPE html>
<html>
<head>

	<title><?php bloginfo('description'); ?> - Home - Nine Lives Winery</title>

	
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
    
    
    
    <?php wp_head(); ?>

    
</head>

<body <?php body_class(); ?>>
    
<div id="wrapper">
    
    
	<div id="header">
		<h1>NINE <img src="<?php bloginfo('template_directory'); ?>/images/cat.png" alt="cat logo"/>
 LIVES</h1>
        <br>
        <h3>W I N E R Y</h3>
	</div><!--endheader-->



<nav>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', ) ); ?>
</nav><!--endnav-->