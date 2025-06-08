<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="三重県伊勢市のカイロプラクター。お気軽に周辺への出張も承っております。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body>
    <header>
        <div class="flex-start">
            <div class="header__logo">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" /></a>
            </div>
            <input type="checkbox" class="menu-btn" id="menu-btn">
            <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>

            <div class="menu">
                <ul class="header__social">
                    <li><a href="/"><p class="txt-18">TOP</p></a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_path('contact') ); ?>"><p class="txt-18">お問い合わせ</p></a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_path('form') ); ?>"><p class="txt-18">WEB予約</p></a></li>
                    <li class="sns-item"><a href="https://www.instagram.com/kitas.chiropractic.ise?igsh=MW0zeGxlNGxxeWdreQ=="><i class="fab fa-instagram fa-4x"></i></a></li>
                    <li class="sns-item"><a href="https://lin.ee/1ifxpHN"><i class="fab fa-line fa-4x"></i></a></li>
                    <li class="pc"><p class="txt-20">Tel. 090-9227-2013</p></li>
                    <li class="tb"><a href="tel:09092272013"><p class="txt-20"><i class="fas fa-phone fa-3x"></i>  090-9227-2013</p></a></li>
                </ul>
            </div>
        </div>
    </header>