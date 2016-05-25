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
				<a href="#" class="button">LEARN MORE</a><br>
		</div>
		<div class="about small-12  medium-4 large-4 columns">
			<h4>Portfolio</h4>
				<a href="#" class="button">LEARN MORE</a><br>
		</div>
		<div class="about small-12 medium-4 large-4 columns">
			<h4>Pricing</h4>
			<a href="#" class="button">LEARN MORE</a><br>
		</div>
	</div>
	&nbsp;
	<div class="row">
		<div class="home small-6 large-3 columns">
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