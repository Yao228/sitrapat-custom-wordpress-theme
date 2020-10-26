<?php
/* 
 Template Name: Blog Page Template
*/

get_header();

?>
<!--====== PAGE TITLE PART START ======-->

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

   <!-- Start Blog Details Area -->
   <section class="blog-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                        <?php 
                            while (have_posts()) {
                                the_post();
                        
                        ?>
                            <div class="article-image">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <span>Posté le:</span> 
                                            <a href="#"><?php the_time('j F Y') ?></a>
                                        </li>
                                        <li>
                                            <span>Par:</span> 
                                            <a href="#"><?php the_author(); ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <h3><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                            </div>

                            <div class="article-footer">
                                <div class="article-tags">
                                    <span>
                                        <i class="fas fa-bookmark"></i>
                                    </span>
                                    <?php 
                                    $post_tags = get_the_tags();

                                    if ( $post_tags ) {
                                        foreach( $post_tags as $tag ) {
                                        echo '<a href="' . get_tag_link($tag->term_id) . '">'.$tag->name.',</a> ';
                                        }
                                    }

                                ?>
                                </div>

                                <!--<div class="article-share">
                                    <ul class="social">
                                        <li><span>Partager:</span></li>
                                        <li>
                                            <a href="#" onclick="
                                            window.open(
                                            'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
                                            'facebook-share-dialog', 
                                            'width=626,height=436'); 
                                            return false;">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>

                                            <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>%20<?php the_permalink(); ?>%20" target="_blank">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>&source=SITRAPAT" target="_blank">
                                                <i class="fab fa-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>-->
                            </div>

                            <div class="post-navigation">
                                <div class="navigation-links">
                                  
                                    <?php
                                        $pagelist = get_posts('sort_column=menu_order&sort_order=asc');
                                        $pages = array();
                                        foreach ($pagelist as $page) {
                                        $pages[] += $page->ID;
                                        }

                                        $current = array_search(get_the_ID(), $pages);
                                        $prevID = $pages[$current-1];
                                        $nextID = $pages[$current+1];
                                    ?>
                                    <?php if (!empty($prevID)) { ?>
                                    <div class="nav-previous">
                                        <a href="<?php echo get_permalink($prevID); ?>" title="<?php echo get_the_title($prevID); ?>">
                                            <i class="flaticon-left"></i> 
                                           Article précedent
                                        </a>
                                    </div>
                                    <?php }
                                    if (!empty($nextID)) { ?>
                                    <div class="nav-next">
                                        <a href="<?php echo get_permalink($nextID); ?>" title="<?php echo get_the_title($nextID); ?>">
                                            Article suivant
                                            <i class="flaticon-right"></i>
                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="comments-area">
                                </h3>
                                <ol class="comment-list">
                                   
                                    <?php
                                    $comments_number = get_comments_number();
                                    if($comments_number !=0){
                                    ?> 
                                        <h3 class="comment-one__block-title"><?php echo get_comments_number() ?> commentaire(s)</h3><!-- /.comment-one__block-title -->
                                
                                    <?php 
                                        $args = get_comments(array(
                                            'post_id' => $post->ID,
                                            'ststus' => 'approve',
                                            'per_page' => 6
                                        ));

                                        $comments_query = new WP_Comment_Query;
                                        $comments = $comments_query->query($args);

                                        if($comments){
                                            foreach($comments as $comment){


                                            }
                                        }
                                        ?>
                                    <li class="comment">
                                        <article class="comment-body">
                                            <footer class="comment-meta">
                                                <div class="comment-author vcard">
                                                <?php echo get_avatar( $comment, 109); ?>
                                                    <b class="fn"><?php echo $comment->comment_author;  ?></b>
                                                    <span class="says">says:</span>
                                                </div>
                                                <div class="comment-metadata">
                                                    <a href="#">
                                                        <time><?php echo $comment->comment_date_gmt;  ?></time>
                                                    </a>
                                                </div>
                                            </footer>
                                            <div class="comment-content">
                                                <p><?php echo $comment->comment_content; ?></p>
                                            </div>
                                            <div class="reply">
                                                <a href="<?php comment_reply_link( array('reply_text' => 'Répondre'), comment_ID(), the_ID() );
 ?>" class="comment-reply-link">Répondre</a>
                                            </div>
                                        </article>
                                    </li>
                                    <?php } ?>
                                </ol>

                                <div class="comment-respond">

                                <?php comments_template();?>

                                </div>
                            </div>
                        </div>
                        <?php  } ?>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area" id="secondary">
                        <?php get_sidebar();?>
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->
 
<?php get_footer();?>