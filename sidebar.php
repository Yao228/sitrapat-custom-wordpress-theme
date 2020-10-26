<?php
/**
 * The Sidebar containing the main widget area
 */
?>
<?php if ( is_active_sidebar( 'post-sidebar' ) ) : ?>
	<?php dynamic_sidebar( 'post-sidebar' ); ?>
<?php endif; ?> 