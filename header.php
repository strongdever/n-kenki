<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
    <?php fit_ogp(); ?>
</head>

<body><!--　body Start-->

    <!--l-header-->
    <header class="header">
        <div class="logo-nav">
            <?php if (is_home()): ?>
                <h1 class="header-logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="<?php wp_title(); ?>">
                    </a>
                </h1>
            <?php else: ?>
                <div class="header-logo">
                    <a href="<?php echo home_url() ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo.svg" alt="<?php wp_title(); ?>">
                    </a>
                </div>
            <?php endif; ?>
            <nav class="header-nav">
                <ul class="nav-menu">
                    <li>
                        <a href="<?php bloginfo('url'); ?>" class="menu-link">
                            <span class="jp font-16-700">TOP</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/reason/" class="menu-link">
                            <span class="jp font-16-700">選ばれる理由</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/service/" class="menu-link">
                            <span class="jp font-16-700">事業内容一覧</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/company/" class="menu-link">
                            <span class="jp font-16-700">会社概要</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/recruit/" class="menu-link">
                            <span class="jp font-16-700">採用情報</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <div class="menu-link">
                            <span class="jp font-16-700">ブログ</span>
                        </div>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php bloginfo('url'); ?>/news/">
                                    <span class="jp font-15-700">お知らせ</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/column/">
                                    <span class="jp font-15-700">コラム</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php bloginfo('url'); ?>/staff/">
                                    <span class="jp font-15-700">スタッフブログ</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="contact-btns">
            <a class="btn-contact" href="<?php bloginfo('url'); ?>/contact/">
                <span class="btn-text font-16-700">お問い合わせ</span>
            </a>
            <a class="btn-tel" href="tel:025-287-3140">
                <div class="icon-text">
                    <img class="btn-icon" src="<?php bloginfo('template_url'); ?>/img/telicon.svg" alt="TELアイコン">
                    <span class="btn-text font-30-700 font-tel">025-287-3140</span>
                </div>
                <p class="business-time font-12-500">営業時間9:00-18:00 (定休日/土日祝)</p>
            </a>
        </div>
    </header>

    <div id="mobile-nav">
        <div class="header-part">
            <a href="<?php bloginfo('url'); ?>/">
                <img class="menu-img" src="<?php bloginfo('template_url'); ?>/img/logo2.svg"
                    alt="<?php wp_title(); ?>" />
            </a>
        </div>
        <div class="mobile-nav-container">
            <div class="mobile-nav-wrapper">
                <div class="nav-menus">
                    <ul class="mobile-nav-menu">
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/">
                                <span class="font-14-700">トップページ</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/concept/">
                                <span class="font-14-500">MURAKAMI STYLE</span>
                            </a>
                        </li>
                        <li class="has_submenu">
                            <div class="menu-link">
                                <span class="font-14-500">家づくりのこだわり</span>
                                <div class="btn-extend"></div>
                            </div>
                            <div class="sub-menus">
                                <ul class="sub-menu">
                                    <a href="<?php bloginfo('url'); ?>/material/" class="sub-menu-link">
                                        <span class="font-14-500">− 人と自然に優しい素材</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/design/" class="sub-menu-link">
                                        <span class="font-14-500">− テ暮らしから考える設計</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/structure/" class="sub-menu-link">
                                        <span class="font-14-500">− 年中快適に過ごす仕組み</span>
                                    </a>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/flow/">
                                <span class="font-14-500">家づくりのステップ</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/modelhouse/">
                                <span class="font-14-500">モデルハウス</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/reform/">
                                <span class="font-14-500">リフォーム</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/restaurant/">
                                <span class="font-14-500">レストラン・AIRBNB</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/faq/">
                                <span class="font-14-500">よくある質問</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="mobile-nav-menu">
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/case/">
                                <span class="font-14-500">建築事例</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/voice/">
                                <span class="font-14-500">お客様の声</span>
                            </a>
                        </li>
                        <li class="has_submenu">
                            <div class="menu-link">
                                <span class="font-14-500">イベント情報</span>
                                <div class="btn-extend"></div>
                            </div>
                            <div class="sub-menus">
                                <ul class="sub-menu">
                                    <a href="<?php bloginfo('url'); ?>/news/" class="sub-menu-link">
                                        <span class="font-14-500">− お知らせ</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/column/" class="sub-menu-link">
                                        <span class="font-14-500">− コラム</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/subsidy/" class="sub-menu-link">
                                        <span class="font-14-500">− 補助金情報</span>
                                    </a>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/company/">
                                <span class="font-14-500">会社概要</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="address-contact">
                    <p class="label font-14-700">お電話でのお問い合わせ</p>
                    <a class="btn-tel" href="tel:0264-23-2002">
                        <img class="btn-icon" src="<?php bloginfo('template_url'); ?>/img/telicon.svg" alt="TELアイコン">
                        <span class="btn-text font-30-500">0264-23-2002</span>
                    </a>
                    <p class="holiday font-14-500">営業時間/8:00-16:00 定休日/月曜・祝日</p>
                    <a class="btn-mail" href="<?php bloginfo('url'); ?>/contact/">
                        <img class="btn-icon" src="<?php bloginfo('template_url'); ?>/img/mailicon.svg" alt="メールアイコン">
                        <span class="btn-text font-16-700">メールでのお問い合わせ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/l-header-->