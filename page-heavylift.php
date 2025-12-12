<?php get_header(); ?>
<main class="common-main" id="heavylift-page">
    <div class="sub-mainview">
        <div class="pagehead-text">
            <h1 class="jp-title font-40-700"><?php the_title(); ?></h1>
            <p class="en-title font-18-700 font-en">HEAVY LIFT</p>
        </div>
        <img class="mainview-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftpageimage.jpg" alt="<?php the_title(); ?>">
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
                <h2 class="title1 large-title font-32-900 main-color">数トンの巨体を、<br class="sp">ミリ単位で操る。</h2>
                <h3 class="title2 small-title font-20-700">それが「重量屋」の仕事です。</h3>
            </div>
            <p class="desc font-16-500">
                重いものを運ぶだけではない。設置、組立、レイアウト変更まで。<br>
                工場の心臓部を動かす、専門技術集団についてご紹介します。
            </p>
        </div>
    </section>

    <section class="service-second-section">
        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <div class="main-title">
                        <h2 class="title1 large-title font-32-900 main-color">「重量屋」とは？</h2>
                        <h3 class="title2 small-title font-20-700">
                            工場の「引っ越し屋さん」であり、<br>
                            「機械のお医者さん」でもあります。
                        </h3>
                    </div>
                    <img class="thumb-img sp" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg111.jpg" alt="「重量屋」とは？">
                    <p class="desc font-16-500">
                        一般的にはあまり馴染みがないかもしれませんが、「重量屋（じゅうりょうや）」または「重量鳶（じゅうりょうとび）」と呼ばれる私たちは、建設業の中でも極めて特殊な専門職です。<br>
                        私たちの扱う荷物は、人の手では到底持ち上げることのできない、数トンから数百トンにも及ぶ巨大な機械設備です。<br>
                        これらを単に運ぶだけでなく、分解、組立、そして稼働するための水平出し（レベル出し）や芯出しといった精密な据付作業までを一貫して行います。<br>
                        工場のラインを止めずに機械を入れ替える、建物の壁ギリギリを通すなど、現場ごとの難題を知恵と技術で解決する。それが私たち重量屋の使命です。
                    </p>
                </div>
                <div class="right-part thumb-wrapper pc">
                    <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg111.jpg" alt="「重量屋」とは？">
                </div>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">重量物とはどんなものか</h2>
            <ul class="items-list">
                <li class="list-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper pc">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg121.jpg" alt="産業機械・工作機械">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-24-700 main-color">1. 産業機械・工作機械</h3>
                            <div class="thumb-wrapper sp">
                                <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg121.jpg" alt="産業機械・工作機械">
                            </div>
                            <p class="item-desc font-14-400">
                                新規設備導入に伴う、大型機械の搬入・開梱・据付作業です。クリーンルーム内の精密機械から、10tを超える大型プレス機まで、建屋や周辺設備に細心の注意を払いながら、ミリ単位の精度で設置します。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="left-right reverse">
                        <div class="left-part thumb-wrapper pc">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg122.jpg" alt="電気設備（キュービクル・トランス）">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-24-700 main-color">2. 電気設備（キュービクル・トランス）</h3>
                            <div class="thumb-wrapper sp">
                                <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg122.jpg" alt="電気設備（キュービクル・トランス）">
                            </div>
                            <p class="item-desc font-14-400">
                                生産ラインの効率化や変更に伴う、既存設備の移設・再配置作業です。工場の稼働停止時間を最小限に抑えるため、お客様の生産計画に合わせたスピーディーかつ確実な作業計画をご提案します。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper pc">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg123.jpg" alt="空調設備・室外機">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-24-700 main-color">3. 空調設備・室外機</h3>
                            <div class="thumb-wrapper sp">
                                <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg123.jpg" alt="空調設備・室外機">
                            </div>
                            <p class="item-desc font-14-400">
                                工場の心臓部である高圧受電設備（キュービクル）や変圧器、発電機などの入れ替え作業です。専門知識が必要な電気設備の取り扱いはもちろん、重量物としての搬入・搬出・据付まで一貫して安全に実施します。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="list-item">
                    <div class="left-right reverse">
                        <div class="left-part thumb-wrapper pc">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg124.jpg" alt="その他（精密機器・タンク等）">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-24-700 main-color">4. その他（精密機器・タンク等）</h3>
                            <div class="thumb-wrapper sp">
                                <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyliftimg124.jpg" alt="その他（精密機器・タンク等）">
                            </div>
                            <p class="item-desc font-14-400">
                                不要になった機械や設備の解体・搬出作業です。周辺設備や建物を傷つけないよう安全に解体し、搬出経路を確保しながら、場外へ確実運び出します。
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="flow-section">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">重量屋の具体的な仕事内容</h2>
            <p class="sub-title font-20-700">運ぶだけではない、多彩な技術。</p>
            <ul class="flow-steps">
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label font-12-400 font-en">STEP</div>
                            <div class="num font-30-500 font-roboto">01</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title font-24-700">
                                計画・養生
                            </h3>
                            <p class="desc font-14-400">
                                現場調査に基づき、搬入経路を確保します。床や壁を傷つけないよう、鉄板やゴムマットで徹底的に養生を行います。<br>
                                この「準備」が仕事の品質を決めます。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label font-12-400 font-en">STEP</div>
                            <div class="num font-30-500 font-roboto">02</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title font-24-700">
                                搬入・揚重
                            </h3>
                            <p class="desc font-14-400">
                                クレーン、フォークリフト、そして専門道具を駆使し、機械を所定の位置まで運びます。<br>
                                数センチの隙間を通すような、繊細な操作が要求されます。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label font-12-400 font-en">STEP</div>
                            <div class="num font-30-500 font-roboto">03</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title font-24-700">
                                据付・レベル出し
                            </h3>
                            <p class="desc font-14-400">
                                機械を設置場所に降ろし、アンカーボルトで固定します。ここで最も重要なのが「レベル出し」。水平器を使い、1ミリ以下の精度で機械の水平を調整します。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label font-12-400 font-en">STEP</div>
                            <div class="num font-30-500 font-roboto">04</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title font-24-700">
                                解体・搬出
                            </h3>
                            <p class="desc font-14-400">
                                役目を終えた古い機械の撤去も行います。狭い場所ではガス溶断などで解体し、安全に搬出できるサイズにしてから運び出します。
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="concept-section section-type2">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">重量屋の仕事道具</h2>
            <h3 class="sub-title font-20-700">巨体を動かす、プロの「相棒」たち</h3>
            <p class="top-desc font-16-500">
                テコの原理や摩擦軽減など、物理の法則を応用した専門道具を使いこなすことで、<br class="pc">
                私たちは巨大な機械を意のままに操ります。
            </p>
            <ul class="items-list">
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyeliftconcept101.jpg" alt="爪付きジャッキ">
                    </div>
                    <h3 class="item-title font-18-700 main-color">爪付きジャッキ</h3>
                    <p class="item-desc font-14-400">
                        わずかな隙間に爪を入れ、数トンの機械を持ち上げる油圧式ジャッキ。作業の起点となる重要な道具です。
                    </p>
                </li>
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyeliftconcept102.jpg" alt="マシンローラー">
                    </div>
                    <h3 class="item-title font-18-700 main-color">
                        マシンローラー<br>
                        （チルローラー）
                    </h3>
                    <p class="item-desc font-14-400">
                        ジャッキで上げた機械の下に滑り込ませる車輪付きの台車。これを複数噛ませることで、重い機械を滑るように移動させます。
                    </p>
                </li>
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyeliftconcept103.jpg" alt="チルホール">
                    </div>
                    <h3 class="item-title font-18-700 main-color">
                        チルホール<br>
                        レバーブロック
                    </h3>
                    <p class="item-desc font-14-400">
                        工場やビルに必要な高圧受電設備（キュービクル）の設置・更新工事です。老朽化に伴う入れ替えも、搬入が困難な場所でも安全に作業します。
                    </p>
                </li>
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyeliftconcept104.jpg" alt="ハンドリフト">
                    </div>
                    <h3 class="item-title font-18-700 main-color">
                        ハンドリフト<br>
                        フォークリフト
                    </h3>
                    <p class="item-desc font-14-400">
                        比較的軽量なパレット物や、道具自体の運搬に使用。現場の状況に合わせて様々なサイズを使い分けます。
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="safety-section section-type3">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">KEnKIだからできる、安心の重量物移設</h2>
            <ul class="items-list">
                <li class="list-item">
                    <h4 class="item-title font-24-700 main-color">
                        1. NXホールディングス様と培った「現場力」
                    </h4>
                    <p class="item-desc font-16-400">
                        日本通運（現：NXホールディングス）様のパートナーとして40年弱。発電所や重要インフラ施設など、失敗の許されない現場で磨き上げた技術力があります。どんな難現場でも、解決策を導き出します。
                    </p>
                </li>
                <li class="list-item">
                    <h4 class="item-title font-24-700 main-color">
                        2. 徹底した「安全」へのこだわり
                    </h4>
                    <p class="item-desc font-16-400">
                        重量物の作業において、事故は絶対に許されません。私たちは道具の点検から手順の確認まで、安全管理を徹底。「安全なくして品質なし」の精神で、お客様の大切な資産を守ります。
                    </p>
                </li>
                <li class="list-item">
                    <h4 class="item-title font-24-700 main-color">
                        3. 柔軟な「ワンストップ」対応
                    </h4>
                    <p class="item-desc font-16-400">
                        機械の運搬だけでなく、電気工事や配管工事、さらには不要になった機械の買取・廃棄まで。KEnKIなら窓口一つでトータルにサポート可能です。
                    </p>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>