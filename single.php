<?php
/**
 * The Template for displaying all single posts.
 *
 * @package wpmaterialdesign
 */

get_header(); ?>

	<div id="sidebar-left">		
	<?php if ( is_active_sidebar( 'left-sidebar' ) ) :  ?>
			<ul id="sidebar">
				<?php dynamic_sidebar( 'left-sidebar' ); ?>
			</ul>
	<?php endif; ?>
	</div>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'layouts/'.'content', 'single' ); ?>

			<?php //wpmaterialdesign_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				/*if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;*/
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( is_active_sidebar( 'right-sidebar' ) ) :  ?>
		<div id="sidebar-right">
			<ul id="sidebar">
				<?php dynamic_sidebar( 'right-sidebar' ); ?>
			</ul>
		</div>
	<?php endif; ?>
<?php get_footer(); ?>