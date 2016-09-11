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
	<div class="trees row">
		<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/3leaves.jpg"/>
	</div>
	&nbsp;
	<div class="about entry-content">
		<div class="row">
  		<div class="about small-12 large-4 columns">
  			<a href="/at-your-service"><h3>AT YOUR SERVICE</h3></a>
  			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/evanandkoren.jpg"/>
  			<h4>our team</h4>
  			<h5>Koren and Evan Farmer have been working together for the last ten years, in marriage and in parenthood...but also artistically and through entrepreneurship.</h5><h5>Evan has been working with WordPress as a blogging platform, business development tool, content management system (CMS), and for web design and development, since 2011.</h5>
  		</hr>
  		</div>
  		<div class="about small-12 large-4 columns">
  			<a href="/offerings"><h3>OFFERINGS</h3></a>
  			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/EMap1.jpg"/>
  			<h4>what we do</h4>
  			<h5>Evan and his wife Koren will work together to craft a beautiful, responsive, functional, and very useful website for you. We use WordPress to help you keep fresh content up and engage with your fans and friends!</h5><h5>Koren takes care of the design work, while Evan maps the plans for your site...covering everything from domain and hosting selection, to the handling of security, site backups, updates, and maintanence.</h5>
  		</hr>
  		</div>
		<div class="about small-12 large-4 columns">
  			<a href="/our-mission"><h3>THE MISSION</h3></a>
  			<img src="http://www.evanjfarmer.dev/wp-content/uploads/2016/09/farmer-family.jpg"/>
  			<h4>our passion</h4>
  			<h5>Our goal is to make peoples' lives more awesome by sharing our skills, experience, and knowledge. We will make your customers' online experience better by improving the web presence of your business and brand.</h5><h5>We want to help you engage more with your audience and build community, both online and offline.</h5>
  		</hr>
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