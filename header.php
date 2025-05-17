<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="Content-script-type" content="text/javascript" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="カイロプラクターどんぐりの公式サイトです。カイロプラクティックを通じて、根本からの健康ケアを提供します。">
    <meta property="og:title" content="カイロプラクターどんぐりの公式サイト">
    <meta property="og:site_name" content="カイロプラクターどんぐりの公式サイト">
    <meta property="og:description" content="カイロプラクターどんぐりの公式サイトです。カイロプラクティックを通じて、根本からの健康ケアを提供します。">
    <meta property="og:type" content="website">
    <meta property="og:image" content="">
    <meta property="og:url" content="https://example.com">
    <meta property="og:locale" content="ja_JP">
    <meta name="format-detection" content="telephone=no">

    <title>カイロプラクターどんぐりの公式サイト</title>
    <?php wp_head(); ?>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">

    <!-- css読み込み -->
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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