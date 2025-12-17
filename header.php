<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="三重県伊勢市のカイロプラクター。お気軽に周辺への出張も承っております。">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="flex-start">
            <div class="header__logo">
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" /></a>
                
                <svg class="donguri-logo" version="1.0" xmlns="http://www.w3.org/2000/svg"
                width="600.000000pt" height="600.000000pt" viewBox="0 0 600.000000 600.000000"
                preserveAspectRatio="xMidYMid meet">

                <g transform="translate(0.000000,600.000000) scale(0.100000,-0.100000)" fill="currentColor" stroke="none">
                <path d="M2958 5046 c-102 -30 -112 -39 -104 -93 3 -24 8 -54 12 -67 5 -23 2
                -25 -38 -30 -254 -30 -322 -43 -474 -87 -282 -81 -506 -210 -676 -388 -130
                -137 -191 -245 -225 -404 -41 -193 31 -464 152 -576 l44 -40 -14 -78 c-28
                -158 -38 -334 -32 -537 12 -396 78 -679 227 -981 209 -422 582 -722 1037 -831
                125 -30 173 -29 320 11 565 151 972 585 1133 1209 85 332 104 792 45 1129
                l-14 78 44 40 c121 112 193 383 152 576 -34 159 -95 267 -225 404 -170 178
                -394 307 -676 388 -129 38 -229 58 -353 72 -152 17 -138 8 -151 95 -17 107
                -29 129 -72 131 -19 1 -70 -9 -112 -21z m-106 -389 c-7 -57 13 -67 136 -67
                117 0 152 12 152 53 0 44 13 50 86 42 583 -61 1045 -342 1150 -700 36 -124 18
                -273 -49 -398 -35 -66 -73 -100 -132 -116 -56 -15 -2334 -15 -2390 0 -59 16
                -97 50 -132 116 -46 85 -66 166 -66 258 0 159 61 293 198 431 151 154 353 267
                603 338 100 29 157 40 342 69 14 3 43 5 65 6 41 1 41 1 37 -32z"/>
                </g>
                </svg>
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