<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="page">
		<header>
			<a href="<?php bloginfo( 'url' ) ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/logo.jpeg" width="337" height="108" alt="LA Rose Vintage Fasion"></a>
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
				</p>
				<p>
					We Are Always Open Monday to Saturday<br>
					12:00 -7:00pm<br>
					Closed Sunday
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