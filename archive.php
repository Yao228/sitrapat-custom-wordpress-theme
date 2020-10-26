<?php
/* 
 Template Name: Blog Page Template
*/

get_header();

?>
<!--====== PAGE TITLE PART START ======-->
<div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2><?php the_archive_title(); ?></h2>
                    <ul>
                        <?php get_breadcrumb(); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if(category_description( $category_id )) { ?>
<!-- Start Blog Section -->
<section class="blog-section pt-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                  <h3 class=""><?php the_archive_title(); ?></h3>
                 <?php the_archive_description();  ?>
              
            </div>
        </div>
    </div>
</section>
  <?php } ?>
 <!-- Start Blog Section -->
 <section class="blog-section ptb-100">
    <div class="container">
        <div class="row">
        <?php
            while(have_posts()){
               the_post();
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-blog-item-two">
                    <div class="blog-image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image">
                    </div>

                    <div class="blog-content">
                        <span>Par <?php the_author(); ?>, <?php the_time('j F Y') ?></span>
                        <h3><?php the_title(); ?></h3>
                        <p>
                            <?php
                                
                                $excerpt = get_the_excerpt();
                                 
                                $excerpt = substr($excerpt, 0, 60);
                                $result = substr($excerpt, 0, strrpos($excerpt, ' '));
                                echo $result;
                                ?>

                        </p>
                        <div class="blog-btn">
                            <a href="<?php the_permalink(); ?>" class="blog-btn-one">
                                Lire la suite
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } 
                
            wp_reset_query();                           
            ?>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
               <!--  <div class="pagination-area">
                    <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                    <a href="#" class="page-numbers">1</a>
                    <span class="page-numbers current" aria-current="page">2</span>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">4</a>
                    <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                </div> -->
                <?php 
                    if (function_exists("sitrapat_blog_pagination"))
                    {
                        sitrapat_blog_pagination($blogposts->max_num_pages);
                        //fellowtuts_wpbs_pagination($the_query->max_num_pages);
                    }
                ?> 
            </div>
        </div>
    </div>
</section>
<!-- End Blog Section -->
 
<?php get_footer();?>