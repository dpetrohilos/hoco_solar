<?php get_header(); ?>

	<main role="main" aria-label="Content" class="grid grid-wrapper-internal">
	<!-- section -->

	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<!-- article -->
		<header id="post-<?php the_ID(); ?>" <?php post_class('grid-item-1-internal grid-item hero'); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post. ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1><?php the_title(); ?>
			</h1>
			<!-- /post title -->

			
        </header><article class="grid-item-3-internal article">
			<?php the_content(); // Dynamic Content. ?>




			<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>


		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else : ?>

		<!-- article -->
		<article class="grid-item-1-internal">

			<h1><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<!-- /section -->

<?php get_sidebar(); ?>
	</main>

<?php get_footer(); ?>
