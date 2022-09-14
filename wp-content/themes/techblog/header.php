<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="Pragma" content="no-cache">
    <title>ZenBlog Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo bloginfo('template_directory');?>/assets/img/favicon.png" rel="icon">
    <link href="<?php echo bloginfo('template_directory');?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo bloginfo('template_directory');?>/assets/vendor/bootstrap/css/bootstrap.min.css"
        rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/vendor/bootstrap-icons/bootstrap-icons.css"
        rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/vendor/swiper/swiper-bundle.min.css"
        rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/vendor/glightbox/css/glightbox.min.css"
        rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS Files -->
    <link href="<?php echo bloginfo('template_directory');?>/assets/css/variables.css" rel="stylesheet">
    <link href="<?php echo bloginfo('template_directory');?>/assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: ZenBlog - v1.1.0
  * Template URL: https://bootstrapmade.com/zenblog-bootstrap-blog-template/
  * Author: BootstrapMade.com
  * License: https:///bootstrapmade.com/license/
  ======================================================== -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3F1062FVB6"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-3F1062FVB6');
    </script>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>TechBlog</h1>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li class="dropdown"><a href="category.html"><span>Categories</span> <i
                                class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                            <?php
                $categories = get_categories();
                foreach($categories as $key => $category):?>
                            <li><a
                                    href="<?php echo get_category_link($category->term_id)?>"><?php echo $category->name; ?></a>
                            </li>
                            <?php endforeach;?>

                        </ul>
                    </li>

                    <li><a href="about">About</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav><!-- .navbar -->

            <div class="position-relative">
                <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
                <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
                <a href="#" class="mx-2"><span class="bi-instagram"></span></a>

                <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
                <i class="bi bi-list mobile-nav-toggle"></i>

                <!-- ======= Search Form ======= -->
                <div class="search-form-wrap js-search-form-wrap">
                    <form action="search-result.html" class="search-form">
                        <span class="icon bi-search"></span>
                        <input type="text" placeholder="Search" class="form-control">
                        <button class="btn js-search-close"><span class="bi-x"></span></button>
                    </form>
                </div><!-- End Search Form -->

            </div>

        </div>

    </header><!-- End Header -->