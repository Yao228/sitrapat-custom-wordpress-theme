 <!-- Start Footer Section -->
 <section class="footer-section">
            <div class="container">
            <?php
                /* The footer widget area is triggered if any of the areas
                * have widgets. So let's check that first.
                *
                * If none of the sidebars have widgets, then let's bail early.
                */
                if (   ! is_active_sidebar( 'first-footer-widget-area'  )
                    && ! is_active_sidebar( 'second-footer-widget-area' )
                    && ! is_active_sidebar( 'third-footer-widget-area'  )
                    && ! is_active_sidebar( 'fourth-footer-widget-area' )
                )
                return;


                if (   is_active_sidebar( 'first-footer-widget-area'  )
                    && is_active_sidebar( 'second-footer-widget-area' )
                    && is_active_sidebar( 'third-footer-widget-area'  )
                    && is_active_sidebar( 'fourth-footer-widget-area' )
                    ) : ?>
                <div class="row">
               
                    <div class="col-lg-3 col-md-6 col-sm-6">
                            <?php dynamic_sidebar('first-footer-widget-area');?>  
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('second-footer-widget-area');?> 
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('third-footer-widget-area');?> 
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('fourth-footer-widget-area');?> 
                        </div>
                    </div>
                </div>
                <?php 
                elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                    && is_active_sidebar( 'second-footer-widget-area' )
                    && is_active_sidebar( 'third-footer-widget-area'  )
                    && ! is_active_sidebar( 'fourth-footer-widget-area' )
                ) : ?>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <?php dynamic_sidebar('first-footer-widget-area');?>  
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('second-footer-widget-area');?> 
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('third-footer-widget-area');?> 
                        </div>
                    </div>
                </div>
                <?php
                elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                    && is_active_sidebar( 'second-footer-widget-area' )
                    && ! is_active_sidebar( 'third-footer-widget-area'  )
                    && ! is_active_sidebar( 'fourth-footer-widget-area' )
                ) : ?>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('first-footer-widget-area');?>  
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('second-footer-widget-area');?> 
                        </div>
                    </div>
                </div>

                <?php
                    elseif ( is_active_sidebar( 'first-footer-widget-area'  )
                        && ! is_active_sidebar( 'second-footer-widget-area' )
                        && ! is_active_sidebar( 'third-footer-widget-area'  )
                        && ! is_active_sidebar( 'fourth-footer-widget-area' )
                    ) :
                    ?>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-footer-widget">
                            <?php dynamic_sidebar('first-footer-widget-area');?>  
                        </div>
                    </div>
                    <?php 
                    //end of all sidebar checks.
                    endif;?>
                    </div>
                    
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="copyright-area-content">
                        <div class="row align-items-center">
                            <div class="col-lg-12 col-md-12">
                                <p>
                                    <i class="far fa-copyright"></i> 
                                    <?php echo esc_attr(get_option('paramtre_thme_option_name')['copyright_3']); ?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Section -->

        <!-- Start Go Top Section -->
        <div class="go-top">
            <i class="fas fa-chevron-up"></i>
            <i class="fas fa-chevron-up"></i>
        </div>
        <!-- End Go Top Section -->
        <?php wp_footer(); ?>
    </body>
</html>