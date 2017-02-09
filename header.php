<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="page">
		<header>
			
			<?php the_custom_logo(); ?>
			
			<?php
				$nav_args = array(
					'menu' => 'main-navigation',
					'container' => 'nav'
				);
				
				wp_nav_menu( $nav_args );
			?>
		</header>
		<div role="main">