<?php get_header(); ?>

<main id="main">
    <section>
        <div class="container">
            <div class="row">

                <div class="col-md-9" data-aos="fade-up">
                    <h3 class="category-title">Category: <?php single_cat_title();?></h3>

                    <?php 
                    if(have_posts()):
                        while(have_posts()): the_post(); ?>

                    <div class="d-md-flex post-entry-2 half">
                        <a href="<?php the_permalink()?>" class="me-4 thumbnail">
                            <img src="<?php echo get_the_post_thumbnail_url( $wp_query_category->ID ); ?>" alt=""
                                class="img-fluid">
                        </a>
                        <div>
                            <div class="post-meta"><span class="date"><?php single_cat_title();?></span> <span
                                    class="mx-1">&bullet;</span>
                                <span><?php  echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                            </div>
                            <h3><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img
                                        src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>"
                                        alt="" class="img-fluid"></div>

                                <div class="name">
                                    <h3 class="m-0 p-0"><i><?php the_author();?></i></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php

                        endwhile;
                    else :
                        echo 'Not found';
                    endif;

                   ?>

                    <?php echo wp_pagenavi(); ?>
                </div>

                <?php get_template_part( 'sidebar' ); ?>

            </div>
        </div>
    </section>



</main><!-- End #main -->

<?php get_footer('footer'); ?>