<?php
/**
 * The template for displaying Search Results pages.
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

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wpmaterialdesign' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				/*	
				$template = $wpmaterialdesign_theme_settings['loop_template_part'];
				$template_meta = get_post_meta($post->ID, '_wpmaterialdesign_template_part_key' ,true);
				$template_meta = (array)$template_meta;
				if( @$template_meta['template'] != ''){
					$template = 'tpl-'.$template_meta['template'];
				}*/						
				get_template_part( 'layouts/content' , get_post_format() );
				?>

			<?php endwhile; ?>

			<?php wpmaterialdesign_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
