<!-- sidebar -->
<aside class="sidebar grid-item-3-internal text-center flex v-center h-center content" role="complementary">

	<?php get_template_part( 'searchform' ); ?>

	<div class="sidebar-widget">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-1' ) ) ?>
	</div>

	<div class="sidebar-widget">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-2' ) ) ?>
	</div>

</aside>
<!-- /sidebar -->
