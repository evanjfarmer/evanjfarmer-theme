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
  <div class="blue-projects row">
    <img src="https://www.evanjfarmer.com/wp-content/uploads/2016/11/blue-projects.jpg" alt="Mac Background and Coffee" width="1400" height="560" />
  </div>
	&nbsp;
	<div class="projects entry-content">
    <h1 class="projects-title">Web Projects</h1>
    <hr>
		<div class="row">
  		<div class="red-cedar small-12 large-4 columns">
        &nbsp;
  			<a href="http://www.redcedarbirth.com"><h3>Red Cedar Birth</h3></a>
  			<a href="http://www.redcedarbirth.com"><img class="red-cedar" src="https://www.evanjfarmer.com/wp-content/uploads/2016/10/red-cedar-site.jpg" alt="Red Cedar Site" width="500" height="400"/></a><hr>
  		</div>
		  <div class="red-cedar-info small-12 large-4 columns">
  			<h4>The Red Cedar Birth website was developed to serve as a resource for expectant mothers. RCB offers midwifery and doula services, and they sell herbal personal care products.</h4><br><hr><br><h4> This site features an ecommerce web store, a community resource page, and a Google-integrated event calendar.</h4><a href="http://www.redcedarbirth.com"><h4 class="check-it"><< Check it out! >></h4></a> 
  		</div>
      <div class="red-cedar-store small-12 large-4 columns">
        &nbsp;
        <a href="http://www.redcedarbirth.com"><img class="red-cedar" src="https://www.evanjfarmer.com/wp-content/uploads/2016/10/red-cedar-store.jpg" alt="Red Cedar Store" width="500" height="400"/></a><hr>
      </div>
  	</div>
    <div class="red-cedar-origin row">
      <div class="large-3 columns"><h2></h2>
      </div>
      <div class="large-6 columns">
      <h4>The original Red Cedar website was hosted on WordPress.com with a basic theme. We created a custom theme from scratch, added the WooCommerce plugin to power the webstore, and developed a design and color scheme with a great designer.</h4>
      </div>
      <div class="webstore-mobile large-3 columns"><h2></h2>
      </div>
    </div>
    <div class="more-soon">
      &nbsp;
      <h3>More portfolio pieces and project features coming soon!</h3>
    </div>
    <hr>
    <h1 class="projects-title">Other Endeavors</h1>
    <div class="row">
      <div class="small-12 large-4 columns">
        &nbsp;
        <a href="http://www.meetup.com/WordPress-Ann-Arbor/"><h3>A2 WP Meetup</h3></a>
        <a href="http://www.meetup.com/WordPress-Ann-Arbor/"><img class="wp-meetup" src="https://www.evanjfarmer.com/wp-content/uploads/2016/11/A2WP.jpg" alt="A2 WP Meetup" width="500" height="350"/></a>
        <hr>
      </div>
      <div class="small-12 large-4 columns">
        <a href="https://www.meetup.com/topics/wordpress/"><img class="wp-meetup" src="https://www.evanjfarmer.com/wp-content/uploads/2016/10/wordpress-4-240.png" alt="WP Meetup" width="240" height="240"/></a>
        <hr>
        <h4>I'm involved in both the Ann Arbor and Jackson Michigan WordPress Meetup groups and would love to connect with others seeking to learn and grow.</h4>
      </div>
      &nbsp;
      <div class="small-12 large-4 columns">
        <a href="http://www.meetup.com/JXNWP-meetup/"><h3>JXN WP Meetup</h3></a>
        <a href="http://www.meetup.com/JXNWP-meetup/"><img class="wp-meetup" src="https://www.evanjfarmer.com/wp-content/uploads/2016/11/JXNWP.png" alt="Jackson WP Meetup" width="500" height="350"/></a>
        <hr>
      </div>
    </div> 
    &nbsp; 
    <div class="row">
      <div class"small-12 large-12 columns">
        <a href="http://www.meetup.com/WordPress-Ann-Arbor/"><h3>WordCamp A2</h3></a>
          <a href="https://2015.annarbor.wordcamp.org/"><img class="wc2015" src="https://www.evanjfarmer.com/wp-content/uploads/2016/11/WC2015.jpg"></a>
          &nbsp;
          <h4>I've helped organize, promote, and put together WordCamp Ann Arbor for the last couple of years...</h4>
          <hr><br>
          <a href="https://2016.annarbor.wordcamp.org/"><img class="wc2016" src="https://www.evanjfarmer.com/wp-content/uploads/2016/11/WC2016.jpg"></a>
          &nbsp;
          <h4>...and I'm on the planning team for the first ever <a href="https://2017.jackson.wordcamp.org/"><strong>WordCamp JXN</strong></a> in 2017, which I'll also be speaking at!</h4>
      </div>
    </div>
    <hr>
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