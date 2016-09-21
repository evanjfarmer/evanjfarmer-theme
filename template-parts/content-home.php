<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php get_template_part( 'nav', '2' );      // Navigation bar #2 (nav-2.php) ?>
		<div class="container-fluid header_sidebar"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header Widgets Area') ) : endif; ?></div><br>
		<div class="row">
			<div class="call small-12 large-12 columns">
				<h2></h2>
			</div>
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
				<h3 class="call"><strong>Do you need a website for your small business, ecommerce store, or other online project?</strong></h3>
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("extra-widget-area") ) : ?>
				<?php endif; ?> 
			</div>
			<div class="callout">
		 		<h4 class="more"><strong>Learn more about how you can do anything with WordPress!</strong></h4>
		 		&nbsp;
		  		<div class="row">
		  		<div class="learn small-12 medium-4 large-4 text-center columns">
		  			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/chart.png" alt="Chart Icon" width="200" height="200" />
		  			<h4><strong>More than 25% the internet is powered by WordPress, and that number is growing!</strong></h4>
		  			<a href="#" class="button">LEARN MORE</a>
		  		</div>
				<div class="learn small-12 medium-4 large-4 text-center columns">
					<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/tablet.png" alt="Tablet Icon" width="200" height="200" />
					<h4><strong>Responsive design, easy to use for content managment, and lots of plug-ins and add-ons to help you do just about anything</srong></h4>				
					<a href="#" class="button">LEARN MORE</a>
		  		</div>
		  		<div class="learn small-12 medium-4 large-4 text-center columns">
		  			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/magnifier.png" alt="Magnifier Icon"	width="200" height="200" />
		  			<h4><strong>Search engine friendly, safe and secure, and <a href="https://wordpress.org/showcase/">trusted by many!</a></strong></h4>
		  			<a href="#" class="button">LEARN MORE</a>
				</div>
			</div>
		</div>
	 	<div class="row">
			<div class="call small-12 large-12 columns">
				<h2>Bombs Away!</h2>
			</div>
	 	</div>
	</div><!-- .entry-content -->

</article><!-- #post-## -->