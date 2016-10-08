<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php get_template_part( 'nav', '2' );      // Navigation bar #2 (nav-2.php) ?>
		<div class="container-fluid header_sidebar"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Widgets Area') ) : endif; ?></div><br>
			</div>
		&nbsp;
		<div class="row">
			<div class="intro small-12 medium-4 large-4 text-center columns">
				<a href="/about" class="about hollow button"><h4><strong>About</strong></h4></a>
				<div class="evanimg">
				<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/aboutsquare.jpg" alt="Evan About Photo" width="250" height="250" />
				</div><br>
			</div>
			<div class="intro small-12 medium-4 large-4 text-center columns">
				<a href="/projects" class="projects hollow button"><h4><strong>Projects</strong></h4></a>
				<div class="portfolioimg">
				<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/portfolioimg.png" alt="Portfolio Icon" width="250" height="250" />
				</div><br>
			</div>
			<div class="intro small-12 medium-4 large-4 text-center columns">
				<a href="/lets-go" class="go hollow button"><h4><strong>Let's Go!</strong></h4></a>
				<div class="letsgoimg">
				<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/letsgoimg.jpg" alt="Man Running Icon" width="250" height="250" />
				</div><br>
			</div>
		</div>
		&nbsp;
			<div class="callout-title">
				&nbsp;
				<div class="call row">
					<div class="columns small-11 medium-8">
					<h2><strong>Do you need a website for your small business, ecommerce store, or other online project?</strong></h2></div>
					<div class="columns small-1 medium-4"></div>
				</div>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra-widget-area") ) : ?>

				<?php endif; ?><br>
				&nbsp;
				<div class="more row">
					<div class="columns medium-4"></div>
					<div class="columns small-12 medium-8">
					<h2><strong>Let's build a platform for your project or product that will engage your fans and increase your following.</strong></h2></div>
				</div>
				&nbsp;
			</div>
			<div class="iconic row">
				<div class="small-6 large-3 columns">
				<img class="icon" src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/img-crop.png" alt="Image Crop Icon" width="200" height="200" />
				<strong><p><u>web design & development</u></p></strong></div>
				<div class="small-6 large-3 columns">
				<img class="icon" src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/light-bulb.png" alt="Light Bulb Icon" width="200" height="200" /><br>
				<strong><p><u>idea creation & implementation</u></p></strong></div>
				<div class="small-6 large-3 columns">
				<img class="icon" src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/like.png" alt="Like Icon" width="200" height="200" /><br>
				<strong><p><u>social strategy & branding</u></p></strong></div>
				<div class="small-6 large-3 columns">
				<img class="basket-icon" src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/basket.png" alt="Basket Icon" width="200" height="200" />
				<strong><p><u>ecommerce solutions</u></p></strong></div>
				&nbsp;
				&nbsp;
			</div>
			<div class="home-slider">
			<?php echo do_shortcode("[huge_it_slider id='1']"); ?>
			</div>
			<div class="callout">
		 		<h2 class="learn_more"><strong>Learn more about how you can do anything with WordPress!</strong></h2>
		 		&nbsp;
		  		<div class="row">
		  		<div class="learn small-12 medium-4 large-4 text-center columns">
		  			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/chart.png" alt="Chart Icon" width="150" height="150" /><br>
		  			<br><h4><strong>More than 25% the internet is powered by WordPress, and that number is growing!</strong></h4>
		  			<br><a href="#" class="button"><strong>LEARN MORE</strong></a><br><br>
		  			<br>
		  		</div>
				<div class="learn small-12 medium-4 large-4 text-center columns">
					<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/tablet.png" alt="Tablet Icon" width="150" height="150" /></br>
					<br><h4><strong>Responsive design, easy to use for content managment, and lots of plug-ins and add-ons to help you do just about anything</strong></h4>				
					<br><a href="#" class="button">LEARN MORE</a><br><br>
		  		</div>
		  		<div class="learn small-12 medium-4 large-4 text-center columns">
		  			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/magnifier.png" alt="Magnifier Icon"	width="150" height="150" /><br>
		  			<br><h4><strong>Search engine friendly, reliable, safe and secure, simple to use, and <a href="https://wordpress.org/showcase/">trusted by many</a>!</strong></h4>
		  			<br><a href="#" class="button">LEARN MORE</a><br><br>
				</div>
			</div>
		</div>
	 	<div class="bombs-away row">
			<div class="bombs-away small-12 large-12 columns">
				<h2><strong>Bombs Away!</strong></h2>
			</div>
	 	</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->