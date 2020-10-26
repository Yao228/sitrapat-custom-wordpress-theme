<?php
 
get_header();
?>

 <?php 
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
 		<?php the_content() ?>
	
	<?php endwhile;
 
else :
	echo '<p>Pas de contenues sur cette page!</p>';
 
endif;
?>
<?php 
get_footer();
?>