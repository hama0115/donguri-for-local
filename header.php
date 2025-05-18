<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
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
                    <li class="top"><a href="#"><p class="txt-20">TOP</p></a></li>
                    <li class="top"><a href="#"><p class="txt-20">お問い合わせ</p></a></li>
                    <li class="top"><a href="#"><p class="txt-20">予約</p></a></li>
                    <li class="top"><a href="#"><i class="fab fa-instagram fa-4x"></i></a></li>
                    <li><a href="#"><i class="fab fa-line fa-4x"></i></a></li>
                    <li><p class="txt-24 pc">Tel. 090-9227-2013</p></li>
                    <li><a href="tel:00000000000" class=sp><p class="txt-24">Tel. 090-9227-2013</p></a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="top_page">