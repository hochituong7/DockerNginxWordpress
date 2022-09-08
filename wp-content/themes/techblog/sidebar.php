<div class="col-md-3">


    <!-- ======= Sidebar ======= -->
    <div class="aside-block">

        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular"
                    aria-selected="true">Popular</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending"
                    type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest"
                    type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <!-- Popular -->
            <div class="tab-pane fade show active" id="pills-popular" role="tabpanel"
                aria-labelledby="pills-popular-tab">

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
                    <span class="author mb-3 d-block"><?php the_author();?></span>
                </div>

                <?php endwhile; endif; ?>
            </div> <!-- End Popular -->

            <!-- Trending -->
            <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">

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
                    <span class="author mb-3 d-block"><?php the_author();?></span>
                </div>

                <?php endwhile; endif; ?>


            </div> <!-- End Trending -->

            <!-- Latest -->
            <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">

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
                    <span class="author mb-3 d-block"><?php the_author();?></span>
                </div>

                <?php endwhile; endif; ?>



            </div> <!-- End Latest -->

        </div>
    </div>

    <?php dynamic_sidebar('sidebar') ?>

</div>