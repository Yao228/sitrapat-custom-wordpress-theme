<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Required meta tags -->
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>    
    </head>
    <body>
     <!-- Start Preloader Area -->
		<!-- <div class="preloader">
			<div class="lds-ripple">
				<div></div>
				<div></div>
			</div>
		</div> -->
        <!-- End Preloader Area --> 

        <!-- Start Navbar Area -->
        <div class="navbar-area-three">
            <div class="trifles-responsive-nav">
                <div class="container">
                    <div class="trifles-responsive-menu">
                        <div class="logo">
                        <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="trifles-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <?php 
                            if ( function_exists( 'the_custom_logo' ) ) {
                                the_custom_logo();
                            }
                        ?>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <?php 
                                wp_nav_menu( 
                                    array( 
                                        'theme_location' => 'primary',
                                        'menu_class' => 'navbar-nav', // ul class
                                        'container' => ''
                                        ) 
                                ); 
                            ?>
                            <div class="others-options">
                                <div class="option-item"><i class="search-btn fa fa-search"></i>
                                    <i class="close-btn fa fa-times"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form method="get" id="searchform" action="'.esc_url(home_url('/')).'" class="search-form">
												<input type="text" class="search-input" name="s" placeholder="Recherche...">
                                                <button class="search-button" type="submit">
                                                    <i class="fas fa-search"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="burger-menu">
                                    <i class="flaticon-menu"></i>
                                </div>
                            </div>
                        </div>

                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Sidebar Modal -->
        <div class="sidebar-modal">
            <div class="sidebar-modal-inner">
                <div class="sidebar-about-area">
                    <div class="title">
                        <h2>Apropos</h2>
                        <p>
                        <?php echo esc_attr(get_option('paramtre_thme_option_name')['a_propos_7']); ?>
                        </p>
                    </div>
                </div>

                <div class="sidebar-contact-area">
                    <div class="contact-info">
                        <div class="contact-info-content">
                            <h2>
                                <a href="tel:<?php echo esc_attr(get_option('paramtre_thme_option_name')['tlphone_1']); ?>">
                                <?php echo esc_attr(get_option('paramtre_thme_option_name')['tlphone_1']); ?>
                                </a>
                                <span>Ou</span>
                                <a href="mailto:<?php echo esc_attr(get_option('paramtre_thme_option_name')['e_mail_2']); ?>">
                                <?php echo esc_attr(get_option('paramtre_thme_option_name')['e_mail_2']); ?>
                                </a>
                                <span>Adresse</span>
                            </h2>
                            
                            <p>
                            <?php echo esc_attr(get_option('paramtre_thme_option_name')['adresse_0']); ?>
                            </p>
    
                            <ul class="social">
                                <li>
                                    <a href="<?php echo esc_attr(get_option('paramtre_thme_option_name')['twitter_5']); ?>" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_attr(get_option('paramtre_thme_option_name')['facebook_4']); ?>" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo esc_attr(get_option('paramtre_thme_option_name')['linkedin_6']); ?>" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <span class="close-btn sidebar-modal-close-btn">
                    <i class="fa fa-times"></i>
                </span>
            </div>
        </div>
        <!-- End Sidebar Modal -->
