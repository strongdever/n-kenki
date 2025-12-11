<?php get_header(); ?>
<main class="common-main" id="service-page">
    <div class="sub-mainview">
        <div class="pagehead-text">
            <h1 class="jp-title font-40-700"><?php the_title(); ?></h1>
            <p class="en-title font-18-700 font-en">SERVICE</p>
        </div>
        <img class="mainview-img" src="<?php bloginfo('template_url'); ?>/img/servicepageimage.jpg"
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
                <h2 class="title1">
                    <span class="font-28-700 main-color">多彩な技術で、あらゆる<br class="sp">「課題」に応える。</span><br>
                    <span class="font-32-900 main-color">KEnKIは、お客様の「困った」を解決するプロフェッショナル集団です。</span>
                </h2>
            </div>
            <p class="desc font-18-500">
                株式会社KEnKIは、「重量物移設」という高度な専門技術を核としながら、そのノウハウを多角的に展開しています。<br>
                工場の生産ラインの効率化から、皆様の快適な住まいづくり、そして現場で必要となる機材のサポートまで。<br>
                事業分野は多岐にわたりますが、すべての根底にあるのは「安全を第一に、お客様の課題を解決する」という実直な姿勢です。 各分野のプロフェッショナルが、貴社の、そしてあなたの「困った」に真摯にお応えします。
            </p>
        </div>
    </section>

    <section class="service-section">
        <div class="container">
            <ul class="service-list">
                <li class="service-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/businessimg001.jpg"
                                alt="重機事業">
                        </div>
                        <div class="right-part">
                            <h2 class="underline-title font-26-700 main-color">
                                １．重機事業
                            </h2>
                            <p class="desc font-14-400">
                                10t、20tを超える大型機械から精密機械まで、豊富な経験と技術で安全かつスムーズな作業を実現します。工場の生産ライン変更やレイアウト変更、キュービクルの入れ替えなど、専門的な作業はお任せください。
                            </p>
                            <a class="btn-more" href="<?php bloginfo('url'); ?>/service/heavyequipment">
                                <span class="btn-text font-16-700">重機事業について詳しく見る</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="service-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/businessimg002.jpg"
                                alt="建築事業">
                        </div>
                        <div class="right-part">
                            <h2 class="underline-title font-26-700 main-color">
                                ２．建築事業
                            </h2>
                            <p class="desc font-14-400">
                                重機事業で培った高い技術力と施工管理能力を、皆様の住まいづくりにも。一般住宅のリフォーム・リノベーションを通して、デザイン性と機能性を両立した快適な住空間をご提案します。
                            </p>
                            <a class="btn-more" href="<?php bloginfo('url'); ?>/service/construction">
                                <span class="btn-text font-16-700">建築事業について詳しく見る</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="service-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/businessimg003.jpg"
                                alt="重量物">
                        </div>
                        <div class="right-part">
                            <h2 class="underline-title font-26-700 main-color">
                                ３．重量物
                            </h2>
                            <p class="desc font-14-400">
                                普段あまり目にすることのない「重量屋（じゅうりょうや）」の仕事。 数トンもの巨大な機械を、彼らはどのように運び、設置しているのか？ 知られざるプロフェッショナルな世界と、KEnKIのこだわりをご紹介します。
                            </p>
                            <a class="btn-more" href="<?php bloginfo('url'); ?>/service/heavylift">
                                <span class="btn-text font-16-700">重量物について詳しく見る</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>