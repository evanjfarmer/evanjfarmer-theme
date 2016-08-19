<?php
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
	<div class="row">
  		<div class="home small-12 large-12 columns">
  		</div>
	<div class="row center">
		<div class="about small-12 medium-4 large-4 columns">
			<h4>About</h4>
			<div class="evanimg">
			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/08/evanabout.png" alt="Evan About Photo" width="167" height="214" />
			</div><br>
				<a href="#" class="button">LEARN MORE</a><br>
		</div>
		<div class="about small-12  medium-4 large-4 columns">
			<h4>Projects</h4>
			<div class="portfolioimg">
			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/08/portfolioimg.png" alt="Portfolio Icon" width="214" height="214" />
			</div><br>
				<a href="#" class="button">LEARN MORE</a><br>
		</div>
		<div class="about small-12 medium-4 large-4 columns">
			<h4>Let's Go!</h4>
			<div class="letsgoimg">
			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/08/letsgoimg-e1470977232917.jpg" alt="Lets Go Photo" width="167" height="214" />
			</div><br>
				<a href="#" class="button">LEARN MORE</a><br>
		</div>
		<div class="row">
			<div class="call small-12 large-12 columns">
				<h2>Bombs Away!</h2>
			</div>
		</div>
		<div class="callout">
  			<h5>This is a callout.</h5>
  			<p>It has an easy to override visual style, and is appropriately subdued.</p>
  			<a href="#">It's dangerous to go alone, take this.</a>
  		</div>
	</div>
</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'evanjfarmer-theme' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->