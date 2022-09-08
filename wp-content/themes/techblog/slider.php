 <!-- ======= Hero Slider Section ======= -->
 <section id="hero-slider" class="hero-slider">
     <div class="container-md" data-aos="fade-in">
         <div class="row">
             <div class="col-12">
                 <div class="swiper sliderFeaturedPosts">
                     <div class="swiper-wrapper">
                         <?php
                $category = get_category_by_slug('new-post');
                $args = array(
                    'cat' => $category->term_id,
                    
                );
                $wp_query_the_last_post = new WP_Query( $args );
                if ( $wp_query_the_last_post->have_posts() ) :
                while ( $wp_query_the_last_post->have_posts() ) : $wp_query_the_last_post->the_post();?>

                         <div class="swiper-slide">
                             <a href="<?php the_permalink()?>" class="img-bg d-flex align-items-end"
                                 style="background-image: url('<?php echo get_the_post_thumbnail_url( $wp_query_the_last_post->ID ); ?>">
                                 <div class="img-bg-inner img-background-text">
                                     <h2><?php the_title(); ?></h2>
                                     <p><?php the_excerpt();?></p>
                                 </div>
                             </a>
                         </div>
                         <?php endwhile; endif; ?>


                     </div>
                     <div class="custom-swiper-button-next">
                         <span class="bi-chevron-right"></span>
                     </div>
                     <div class="custom-swiper-button-prev">
                         <span class="bi-chevron-left"></span>
                     </div>

                     <div class="swiper-pagination"></div>
                 </div>
             </div>
         </div>
     </div>
 </section><!-- End Hero Slider Section -->