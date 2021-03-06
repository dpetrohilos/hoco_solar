<?php get_header(); ?>

<div class="grid-wrapper-internal-top grid-area" area-label="content" role="heading">
	<?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>

		<!-- article -->
		<header id="post-<?php the_ID(); ?>" <?php post_class('grid-item hero'); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail() ) : // Check if Thumbnail exists. ?>
            <?php the_post_thumbnail(); // Fullsize image for the single post. ?>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<!-- /post title -->
        </header>
<section class="text-wrapper content">
				<h1 class="intro"><?php the_title(); ?>
			</h1>
		
    
    <!-- post details -->
			<span class="date">
				<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
					<?php the_date(); ?> <?php the_time(); ?>
				</time>
			</span>
			<span class="author"><?php esc_html_e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
			<span class="comments"><?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' ) ); ?></span>
			<!-- /post details -->
    
    </section>
        
</div>    
        
<main role="main" area-label="content" class="grid-wrapper-internal">        
        <article class="grid-item-1-internal article">
			<?php the_content(); // Dynamic Content. ?>




			<?php edit_post_link(); // Always handy to have Edit Post Links available. ?>

			<?php comments_template(); ?>

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
