<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav>
            <div class="menu-icon">
                <span class="fas fa-bars"></span>
            </div>
            <div class="logo">
                School of <br> <span> Excellence</span>
            </div>

            <div class="nav-items">
                <?php 
                // $args = array(
                //     'theme_location' => 'header-menu'
                // );

                // wp_nav_menu($args);
                ?>
                
                <li <?php if(is_home()) echo 'class="current-menu-item"'?>><a href="<?php echo site_url();?>">Home</a></li>
                <li <?php if(is_page('about-us') or wp_get_post_parent_id(0) == 11) echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/about-us');?>">About</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Blog</a></li>            
            
                <li><a class="sm-btn" href="#">Login</a></li>
                <li><a class="sm-btn position" href="#">Sign Up</a></li>
               
            </div>
            <div class="cancel-icon">
                <span class="fas fa-times"></span>
            </div>
            <div class="search-icon">
                <span class="fas fa-search"></span>
            </div>
        </nav>
    </header>