<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lato:wght@700&display=swap" rel="stylesheet">

    <title>GP Solutions Task</title>
    <?php wp_head(); ?>
</head>
<body>
 <div class="wrapper">
    <header class="hero">
        <div class="header-top">
            <!-- burger -->
            <div class="menu__icon icon_menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- mobile menu -->
            <div class="mobile-menu-cont">
            <?php wp_nav_menu( array(
                        'theme_location' => 'top',
                        'menu_class' => 'mobile-menu'
                    ) ); ?>
                <!-- <ul class="mobile-menu">
                    <li><a href="">Our Technology</a></li>
                    <li><a href="">Solutions</a></li>
                    <li><a href="">Verticals</a></li>
                    <li><a href="">Resources</a></li>
                    <li><a href="">About Us</a></li>                   
                </ul> -->
                <div class="mobile-header-buttons">
                    <button class="demo">Book A Demo</button>
                    <button class="login">Log In</button>
                </div>
            </div>
            <!-- end mobile menu -->

            <div class="header-top-line">
                <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_template_directory_uri();  ?>/assets/img/LOGO.png" alt="logo" class="logo">
                </a>
                <!-- top menu -->
                <?php wp_nav_menu( array(
                        'theme_location' => 'top',
                        'menu_class' => 'header-menu'
                    ) ); ?>
                <!-- <ul class="header-menu">
                    <li><a href="">Our Technology</a></li>
                    <li><a href="">Solutions</a></li>
                    <li><a href="">Verticals</a></li>
                    <li><a href="">Resources</a></li>
                    <li><a href="">About Us</a></li>
                </ul> -->
                <!-- end top menu -->
                <div class="header-buttons">
                    <button class="demo">Book A Demo</button>
                    <button class="login">Log In</button>
                </div>
            </div>
        </div>
        <div class="slider-wrapper">
            <?php $header_slides = new WP_Query(array(
                'post_type' => 'header_slide',
                'order' => 'ASC',
            ));
            if($header_slides->have_posts()){
                while($header_slides->have_posts()){ 
                    $header_slides->the_post(); ?>
            <div class="slider-item">
                <h1 class="slide-text">
                    <?php the_title(); ?><br>
                    <button class="in-touch">Get In Touch</button> 
                </h1>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="city" class="slide-img">
            </div>
            <?php }
            wp_reset_postdata();
            } ?>
        </div>
    </header>