<?php get_header(); ?>

 <!-- Start Page Title Area -->
 <div class="page-title-area">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>
                        <?php echo $wp_query->found_posts; ?>
        <?php _e( 'résultats trouvés pour', 'locale' ); ?>: "<?php the_search_query(); ?>
                    </h2>
                   <!-- <ul>
                        <?php get_breadcrumb(); ?>
                    </ul>-->
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Start Blog Section -->
 <section class="blog-section ptb-100">
    <div class="container">
        <div class="row">
        <?php if ( have_posts() ) { ?>


        <?php while ( have_posts() ) { the_post(); ?>

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

            <?php } ?>
        <?php } ?>
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


<?php get_footer(); ?>