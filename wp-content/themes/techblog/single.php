<?php get_header(); ?>

<main id="main">

    <section class="single-post-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post-content" data-aos="fade-up">

                    <!-- ======= Single Post Content ======= -->
                    <div class="single-post">
                        <div class="post-meta"><span class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span> <span class="mx-1">&bullet;</span>
                            <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span></div>
                        <h1 class="mb-5"><?php the_title(); ?></h1>
                        <?php the_content();?>
                    </div><!-- End Single Post Content -->

                    <!-- ======= Comments ======= -->
                   <?php comments_template();?>
                  
                </div>
                <?php get_template_part( 'sidebar' ); ?>
            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php get_footer('footer'); ?>