<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">

            <div class="col-lg-3">
                <?php
            $args_new_list = array(
                'post_type' => 'post',
                'posts_per_page' => 2,
                'offset' => 2,
                'post_status' => 'publish', 
                'order'=>'DESC',
                'orderby'=>'ID',
            );
            $wp_query_new_list = new WP_Query( $args_new_list );
            if ( $wp_query_new_list->have_posts() ) :
            while ( $wp_query_new_list->have_posts() ) : $wp_query_new_list->the_post();?>
                <div class="post-entry-1 post-entry-1-custom">
                    <a href="<?php the_permalink()?>">
                        <img src="<?php echo get_the_post_thumbnail_url( $wp_query_new_list->ID ); ?>" alt=""
                            class="img-fluid">
                    </a>
                    <div class="post-meta">
                        <span class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
                        <span class="mx-1">&bullet;</span> <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                    </div>
                    <h2 class="mb-2"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                    <p class="mb-4 d-block"><?php the_excerpt();?></p>
                    <div class="d-flex align-items-center author">

                        <div class="photo"><img
                                src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>"
                                alt="" class="img-fluid"></div>

                        <div class="name">
                            <h3 class="m-0 p-0"><i><?php the_author();?></i></h3>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif; ?>
            </div>

            <div class="col-lg-6">
                <div class="row g-5">

                    <div class="col-lg-12 border-start custom-border">
                        <?php
                    $args_the_last_post = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'post_status' => 'publish', 
                            'order'=>'DESC',
                            'orderby'=>'ID',
                        );
                        $wp_query_the_last_post = new WP_Query( $args_the_last_post );
                        if ( $wp_query_the_last_post->have_posts() ) :
                        while ( $wp_query_the_last_post->have_posts() ) : $wp_query_the_last_post->the_post();?>
                        <div class="post-entry-1 post-entry-1-custom">
                            <a href="<?php the_permalink()?>"><img
                                    src="<?php echo get_the_post_thumbnail_url( $wp_query_the_last_post->ID ); ?>"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span
                                    class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
                                <span class="mx-1">&bullet;</span>
                                <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                            </div>
                            <h2 class="lg"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img
                                        src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>"
                                        alt="" class="img-fluid"></div>

                                <div class="name">
                                    <h3 class="m-0 p-0"><i><?php the_author();?></i></h3>
                                </div>
                            </div>
                            <p class="mb-4 d-block"><?php the_excerpt(); ?></p>
                        </div>

                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
            <?php get_template_part( 'sidebar' ); ?>
        </div> <!-- End .row -->
    </div>
</section> <!-- End Post Grid Section -->
<!-- ======= Technical Category Section ======= -->
<section class="category-section">
    <div class="container" data-aos="fade-up">
        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Technical</h2>
            <div><a href="category/technical-skill" class="more">See All Technical</a></div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-4">
                        <?php
                $args_technical_new = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'offset' => 2,
                    'cat' => 3,
                    'post_status' => 'publish', 
                    'order'=>'DESC',
                    'orderby'=>'ID',
                );
                $wp_query_technical_new = new WP_Query( $args_technical_new );
                if ( $wp_query_technical_new->have_posts() ) :
                while ( $wp_query_technical_new->have_posts() ) : $wp_query_technical_new->the_post();?>
                        <div class="post-entry-1 post-entry-1-custom">
                            <a href="<?php the_permalink()?>"><img
                                    src="<?php echo get_the_post_thumbnail_url( $wp_query_technical_new->ID ); ?>"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span
                                    class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
                                <span class="mx-1">&bullet;</span>
                                <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                            </div>
                            <h2 class="mb-2"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img
                                        src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>"
                                        alt="" class="img-fluid"></div>

                                <div class="name">
                                    <h3 class="m-0 p-0"><i><?php the_author();?></i></h3>
                                </div>
                            </div>
                            <p class="mb-4 d-block"><?php the_excerpt(); ?></p>
                        </div>
                        <?php endwhile; endif; ?>

                    </div>
                    <div class="col-lg-8">

                        <?php
                $args_technical_latest = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'cat' => 3,
                    'post_status' => 'publish', 
                    'order'=>'DESC',
                    'orderby'=>'ID',
                );
                $wp_query_technical_latest = new WP_Query( $args_technical_latest );
                if ( $wp_query_technical_latest->have_posts() ) :
                while ( $wp_query_technical_latest->have_posts() ) : $wp_query_technical_latest->the_post();?>
                        <div class="post-entry-1 post-entry-1-custom">
                            <a href="<?php the_permalink()?>"><img
                                    src="<?php echo get_the_post_thumbnail_url( $wp_query_technical_latest->ID ); ?>"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span
                                    class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
                                <span class="mx-1">&bullet;</span>
                                <span><?php  echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                            </div>
                            <h2 class="mb-2 lg"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img
                                        src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>"
                                        alt="" class="img-fluid"></div>

                                <div class="name">
                                    <h3 class="m-0 p-0"><i><?php the_author();?></i></h3>
                                </div>
                            </div>
                            <p class="mb-4 d-block"><?php the_excerpt(); ?></p>
                        </div>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <?php
                $args_technical_trending = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'cat' => 3,
                    'offset' => 4,
                    'post_status' => 'publish', 
                    'order'=>'DESC',
                    'orderby'=>'ID',
                );
                $wp_query_technical_trending = new WP_Query( $args_technical_trending );
                if ( $wp_query_technical_trending->have_posts() ) :
                while ( $wp_query_technical_trending->have_posts() ) : $wp_query_technical_trending->the_post();?>
                <div class="post-entry-1 post-entry-1-custom">
                    <div class="post-meta"><span
                            class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
                        <span class="mx-1">&bullet;</span> <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                    </div>
                    <h2 class="mb-2"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                    <span class="author mb-3 d-block"><i><?php the_author();?></i></span>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section><!-- End Technical Category Section -->

<!-- ======= Human Skill Category Section ======= -->
<section class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Human Skill</h2>
            <div><a href="category/human-skill" class="more">See All Human Skill</a></div>
        </div>

        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-lg-4">
                        <?php
                $args_humanskill_new = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'offset' => 2,
                    'cat' => 1,
                    'post_status' => 'publish', 
                    'order'=>'DESC',
                    'orderby'=>'ID',
                );
                $wp_query_humanskill_new = new WP_Query( $args_humanskill_new );
                if ( $wp_query_humanskill_new->have_posts() ) :
                while ( $wp_query_humanskill_new->have_posts() ) : $wp_query_humanskill_new->the_post();?>
                        <div class="post-entry-1 post-entry-1-custom">
                            <a href="<?php the_permalink()?>"><img
                                    src="<?php echo get_the_post_thumbnail_url( $wp_query_humanskill_new->ID ); ?>"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span
                                    class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
                                <span class="mx-1">&bullet;</span>
                                <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                            </div>
                            <h2 class="mb-2"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img
                                        src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>"
                                        alt="" class="img-fluid"></div>

                                <div class="name">
                                    <h3 class="m-0 p-0"><i><?php the_author();?></i></h3>
                                </div>
                            </div>
                            <p class="mb-4 d-block"><?php the_excerpt(); ?></p>
                        </div>
                        <?php endwhile; endif; ?>

                    </div>
                    <div class="col-lg-8">

                        <?php
                $args_humanskill_latest = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                    'cat' => 1,
                    'post_status' => 'publish', 
                    'order'=>'DESC',
                    'orderby'=>'ID',
                );
                $wp_query_humanskill_latest = new WP_Query( $args_humanskill_latest );
                if ( $wp_query_humanskill_latest->have_posts() ) :
                while ( $wp_query_humanskill_latest->have_posts() ) : $wp_query_humanskill_latest->the_post();?>
                        <div class="post-entry-1 post-entry-1-custom">
                            <a href="<?php the_permalink()?>"><img
                                    src="<?php echo get_the_post_thumbnail_url( $wp_query_humanskill_latest->ID ); ?>"
                                    alt="" class="img-fluid"></a>
                            <div class="post-meta"><span
                                    class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span>
                                <span class="mx-1">&bullet;</span>
                                <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span>
                            </div>
                            <h2 class="mb-2 lg"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                            <div class="d-flex align-items-center author">
                                <div class="photo"><img
                                        src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), array('size' => 450)); ?>"
                                        alt="" class="img-fluid"></div>

                                <div class="name">
                                    <h3 class="m-0 p-0"><i><?php the_author();?></i></h3>
                                </div>
                            </div>
                            <p class="mb-4 d-block"><?php the_excerpt(); ?></p>
                        </div>
                        <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>

            <div class="col-md-3">

                <?php
                $args_humanskill_trending = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'cat' => 1,
                    'offset' => 4,
                    'post_status' => 'publish', 
                    'order'=>'DESC',
                    'orderby'=>'ID',
                );
                $wp_query_humanskill_trending = new WP_Query( $args_humanskill_trending );
                if ( $wp_query_humanskill_trending->have_posts() ) :
                while ( $wp_query_humanskill_trending->have_posts() ) : $wp_query_humanskill_trending->the_post();?>
                <div class="post-entry-1 post-entry-1-custom">
                    <div class="post-meta"><span
                            class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name;?></span> <span
                            class="mx-1">&bullet;</span> <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span></div>
                    <h2 class="mb-2"><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                    <span class="author mb-3 d-block"><i><?php the_author();?></i></span>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</section><!-- End Human Skill Category Section -->