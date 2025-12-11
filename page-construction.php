<?php get_header(); ?>
<main class="common-main" id="construction-page">
    <div class="sub-mainview">
        <div class="pagehead-text">
            <h1 class="jp-title font-40-700"><?php the_title(); ?></h1>
            <p class="en-title font-18-700 font-en">CONSTRUCTION</p>
        </div>
        <img class="mainview-img" src="<?php bloginfo('template_url'); ?>/img/constructionpageimage.jpg"
            alt="<?php the_title(); ?>">
    </div>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>

    <section class="first-section">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title1 font-32-900 main-color">
                    技術力で叶える、<br class="sp">理想の住まい。
                </h2>
            </div>
            <p class="desc font-18-500">
                KEnKIが持つ確かな技術力と安全管理のノウハウは、皆様の大切な住まいづくりにも活かされています。<br>
                理想の暮らしを形にする新築・リノベーションは、私たちにお任せください。
            </p>
        </div>
    </section>

    <section class="service-second-section">
        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <h2 class="main-title font-32-900 main-color">
                        <span class="font-28-700 main-color">KEnKIが手掛けるお客様目線の<br class="sp">住まいづくり</span>
                        「確かな技術」を、住まいづくりへ。
                    </h2>
                    <img class="thumb-img sp" src="<?php bloginfo('template_url'); ?>/img/constructionimg111.jpg"
                        alt="「確かな技術」を、住まいづくりへ。">
                    <p class="desc font-16-500">
                        KEnKIは、重機事業で培った高度な技術力と、安全を最優先する実直な仕事ぶりを、一般のお客様（BtoC）向けの住宅リノベーション事業にも活かしています。<br>
                        <span class="sentences-paragraph"></span>
                        専門ブランド「リノプレ」を通じ、戸建てやマンションのフルリノベーション、デザイン設計など、お客様一人ひとりの夢を形にするお手伝いをしています。<br>
                        大切な資産である住まいだからこそ、信頼できる技術でお応えします。
                    </p>
                </div>
                <div class="right-part thumb-wrapper pc">
                    <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/constructionimg111.jpg"
                        alt="「確かな技術」を、住まいづくりへ。">
                </div>
            </div>
        </div>
    </section>

    <section class="images-section">
        <img class="image1" src="<?php bloginfo('template_url'); ?>/img/constructionimg121.jpg" alt="">
        <img class="image2" src="<?php bloginfo('template_url'); ?>/img/constructionimg122.jpg" alt="">
        <img class="image3" src="<?php bloginfo('template_url'); ?>/img/constructionimg123.jpg" alt="">
    </section>

    <section class="section3">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">
                なぜKEnKIがリノベーションを<br class="sp">手掛けるのか
            </h2>
            <h3 class="sub-title font-20-700">
                「確かな技術」と「実直な姿勢」を、<br class="sp">住まいづくりへ。
            </h3>
            <p class="desc font-16-500">
                建築事業では2004年（平成16年）からパナホーム（株）様との請負契約をきっかけに、建築事業部を設立し専属でお仕事をさせていただいてきました。<br>
                KEnKIは、工場の大型設備や重量物の扱いで培った、高度な技術力と徹底した安全管理ノウハウを持っています。<br>
                一瞬のミスも許されない現場で培った「実直な仕事ぶり」は、お客様の大切な資産である「住まい」を手掛ける上でも、私たちの最大の強みであると信じています。<br>
                「リノプレ」は、KEnKIの技術力を背景に持つ、信頼のリノベーションブランドです。<br>
                皆様の想いやさまざまなニーズにお答えしていきます。
            </p>
        </div>
    </section>

    <section class="section4">
        <div class="container">
            <div class="left-right">
                <div class="left-part thumb-wrapper">
                    <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/otherlogo.svg"
                        alt="otherlogo.svg" alt="豊富な施工事例や詳細は、専門サイトをご覧ください">
                </div>
                <div class="right-part">
                    <h2 class="main-title font-20-700">
                        豊富な施工事例や詳細は、専門サイトをご覧ください
                    </h2>
                    <p class="desc font-16-500">
                        当社の住宅・店舗リノベーション専門サイト「リノプレ」では、これまで手掛けた豊富な施工事例ギャラリーや、サービスの詳細、無料相談会のご案内などを詳しく掲載しております。<br>
                        お客様の理想の住まいづくりのヒントがきっと見つかります。
                    </p>
                </div>
            </div>
            <a class="btn-more" href="" target="_blank">
                <span class="btn-text font-16-700">リノプレサイトはこちら</span>
            </a>
        </div>
    </section>

    <section class="staff-section">
        <div class="container">
            <div class="section-title">
                <p class="en-title font-60-700 font-en main-color">STAFF</p>
                <h2 class="jp-title font-16-700">担当スタッフ紹介</h2>
            </div>
            <ul class="items-list staff-list">
                <li class="list-item staff-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/staff001.jpg"
                                alt="大石 一生">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-20-700 main-color">
                                建築事業部 部長　大石 一生 （おおにしいっせい）
                            </h3>
                            <p class="item-desc font-16-500">
                                趣味・特技：柔道、家族<br>
                                会社きってのMｒ.マジメ。一途に鉄骨組んで早１５年。 昨今移動式クレーン資格も取得し、オペレーターとしても活躍する建築主任。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="list-item staff-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/staff002.jpg"
                                alt="上松 幹夫">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-20-700 main-color">
                                建築事業部 主任　上松 幹夫 （うえまつみきお）
                            </h3>
                            <p class="item-desc font-16-500">
                                趣味・特技：サッカー、⾞、おしゃれ<br>
                                職歴１７年のベテラン作業主任。仕事終わりにサッカーまでこなすほどの体⼒の持ち主。技術、体⼒ともに会社を代表するマルチプレーヤー
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>