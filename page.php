<?php get_header(); ?>

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2><?php the_title(); ?></h2>
                    <ul>
                        <?php get_breadcrumb(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
 
		<?php the_content() ?>
	
	<?php endwhile;
 
else :
	echo '<p>Pas de contenu pour cette page</p>';
 
endif;
?>

<?php get_footer(); ?>
