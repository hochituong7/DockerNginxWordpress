 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

     <div class="footer-content">
         <div class="container">

             <div class="row g-5">
                 <div class="col-lg-4">
                     <h3 class="footer-heading">About TechBlog</h3>
                     <p>The best ideas can change who we are. Techblog is where those ideas take shape, take off, and spark powerful conversations. We’re an open platform where over 100 million readers come to find insightful and dynamic thinking. Here, expert and undiscovered voices alike dive into the heart of any topic and bring new ideas to the surface. Our purpose is to spread these ideas and deepen understanding of the world.</p>
                     <p><a href="about" class="footer-link-more">More About Us</a></p>
                 </div>
                 <div class="col-6 col-lg-2">
                     <h3 class="footer-heading">Navigation</h3>
                     <ul class="footer-links list-unstyled">
                         <li><a href="index"><i class="bi bi-chevron-right"></i> Home</a></li>
                         <li><a href="category"><i class="bi bi-chevron-right"></i> Categories</a></li>
                         <li><a href="about"><i class="bi bi-chevron-right"></i> About us</a></li>
                         <li><a href="contact"><i class="bi bi-chevron-right"></i> Contact</a></li>
                     </ul>
                 </div>
                 <div class="col-6 col-lg-2">
                     <h3 class="footer-heading">Categories</h3>
                     <ul class="footer-links list-unstyled">
                         <?php
              $categories = get_categories();
              foreach($categories as $key => $category):?>
                         <li><a href="<?php echo get_category_link($category->term_id)?>"><i
                                     class="bi bi-chevron-right"></i> <?php echo $category->name; ?></a></li>
                         <?php endforeach;?>
                     </ul>
                 </div>

                 <div class="col-lg-4">
                     <h3 class="footer-heading">Recent Posts</h3>

                     <ul class="footer-links footer-blog-entry list-unstyled">
                     <?php
                        $args_the_last_post = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'post_status' => 'publish', 
                            'order'=>'DESC',
                            'orderby'=>'ID',
                        );
                        $wp_query_the_last_post = new WP_Query( $args_the_last_post );
                        if ( $wp_query_the_last_post->have_posts() ) :
                        while ( $wp_query_the_last_post->have_posts() ) : $wp_query_the_last_post->the_post();?>
                         <li>
                             <a href="<?php the_permalink()?>" class="d-flex align-items-center">
                                 <img src="<?php echo get_the_post_thumbnail_url( $wp_query_the_last_post->ID ); ?>" alt=""
                                     class="img-fluid me-3">
                                 <div>
                                     <div class="post-meta d-block"><span class="date"><?php echo wp_get_post_terms(get_the_ID(), 'category')[0]->name; ?></span> <span
                                             class="mx-1">&bullet;</span> <span><?php echo get_the_date( 'Y-m-d H:i:s' ); ?></span></div>
                                     <span><?php the_title(); ?></span>
                                 </div>
                             </a>
                         </li>
                      <?php endwhile; endif; ?>
                     </ul>

                 </div>
             </div>
         </div>
     </div>

     <div class="footer-legal">
         <div class="container">

             <div class="row justify-content-between">
                 <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                     <div class="copyright">
                         © Copyright <strong><span>TechBlog</span></strong>. All Rights Reserved
                     </div>

                     <div class="credits">
                         <!-- All the links in the footer should remain intact. -->
                         <!-- You can delete the links only if you purchased the pro version. -->
                         <!-- Licensing information: https://bootstrapmade.com/license/ -->
                         <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
                       
                     </div>

                 </div>

                 <div class="col-md-6">
                     <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                         <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                         <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                         <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                         <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                         <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                     </div>

                 </div>

             </div>

         </div>
     </div>

 </footer>
 <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo bloginfo('template_directory');?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo bloginfo('template_directory');?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo bloginfo('template_directory');?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo bloginfo('template_directory');?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo bloginfo('template_directory');?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo bloginfo('template_directory');?>/assets/js/main.js"></script>

</body>

</html>