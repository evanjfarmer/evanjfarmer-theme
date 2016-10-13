<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Evanjfarmer_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	&nbsp;
	<div class="projects entry-content">
		<div class="row">
  		<div class="red-cedar small-12 large-4 columns">
  			<a href="http://www.redcedarbirth.com"><h3>Red Cedar Birth</h3></a>
  			<a href="http://www.redcedarbirth.com"><img class="red-cedar" src="http://www.evanjfarmer.dev/wp-content/uploads/2016/10/red-cedar-site.jpg" alt="Red Cedar Site" width="500" height="400"/></a>
  			<h4></h4>
  			<h5></h5>
  		</div>
		<div class="red-cedar-info small-12 large-4 columns">
  			<h4>The Red Cedar Birth website was developed to serve as a resource for expectant mothers.</h4><br><h4> It features an ecommerce web store, a community resource page, and event calendar.</h4>
  			<h5></h5> 
  		</div>
      <div class="red-cedar-store small-12 large-4 columns">
        <a href="http://www.redcedarbirth.com"><img class="red-cedar" src="http://www.evanjfarmer.dev/wp-content/uploads/2016/10/red-cedar-store.jpg" alt="Red Cedar Store" width="500" height="400"/></a>
        <h4></h4>
        <h5></h5>
      </div>
  	</div>
    <div class="more-soon">
    <h3>More portfolio pieces and project features coming soon!</h3>
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