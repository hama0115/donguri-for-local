<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <!-- css読み込み -->    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/./css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/./css/common.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/./css/setting.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/./style.css" />
</head>
<body>
    <header>
        <div class="flex-start">
            <div class="header__logo">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" /></a>
            </div>
            <!-- <nav class="header__nav">
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                </ul>
            </nav> -->
            <!-- <div class="header__search">
                <input type="text" placeholder="Search..." />
            </div> -->
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>

            <div class="menu">
                <ul class="header__social">
                    <li class="top"><a href="#"><i class="fab fa-instagram fa-4x"></i></a></li>
                    <li><a href="#"><i class="fab fa-line fa-4x"></i></a></li>
                    <li><a href="tel:00000000000"><p class="txt-24">Tel. 090-9227-2013</p></a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="top_page">