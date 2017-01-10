<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
			<div class="welcome">
				<p>
					8064 Melrose Ave<br>
					Los Angeles, CA 90046<br>
					323.938.9909<br>
					<small>We often stay late, call us!</small>
				</p>
				<p>
					We Are Always Open Monday to Saturday<br>
					12:00 -7:00pm<br>
					<small>Closed Sunday</small>
				</p>
			</div>
			<ul class="grid">
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
						<!-- <figcaption>Some sweet dress</figcaption> -->
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
				<li>
					<figure>
						<img src="http://placehold.it/271x315" alt="">
					</figure>
				</li>
			</ul>
		</div>
		<footer>
			<nav class="social">
				<a href="https://www.facebook.com/laroseboutique" class="icons-fb" rel="external">Facebook</a>
				<a href="http://www.twitter.com/LArosevintage" class="icons-twitter" rel="external">Twitter</a>
				<a href="http://instagram.com/Larosevintage" class="icons-instagram" rel="external">Instagram</a>
			</nav>
		</footer>
	</div><!--eof .page -->
<?php wp_footer(); ?>
</body>
</html>