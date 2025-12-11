<?php get_header(); ?>
<main class="common-main" id="heavyequipment-page">
    <div class="sub-mainview">
        <div class="pagehead-text">
            <h1 class="jp-title font-40-700"><?php the_title(); ?></h1>
            <p class="en-title font-18-700 font-en">HEAVY EQUIPMENT</p>
        </div>
        <img class="mainview-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipmentpageimage.jpg"
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
                    <span class="font-28-700 main-color">10tを超える大型機械から<br class="sp">精密機器まで。</span><br>
                    <span class="font-32-900 main-color">工場の未来を動かす、<br class="sp">重量物移設のプロ集団。</span>
                </h2>
            </div>
            <p class="desc font-18-500">
                NXホールディングス様（旧：日本通運）と歩んだ40年の信頼と実績。<br>
                発電所や大規模工場で培った最高水準の技術力と安全管理体制で、<br class="pc">お客様の生産ラインを止めない、確実な設備移設を実現します。
            </p>
        </div>
    </section>

    <section class="service-second-section">
        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <h2 class="main-title font-32-900 main-color">
                        <span class="font-28-700 main-color">KEnKIの重機事業とは？</span>
                        工場の「困った」を解決する、<br>
                        それがKEnKIの重機事業です。
                    </h2>
                    <img class="thumb-img sp" src="<?php bloginfo('template_url'); ?>/img/heavyequipmentimg111.jpg"
                        alt="KEnKIの重機事業とは？">
                    <p class="desc font-16-500">
                        「生産効率化のために、機械のレイアウトを変更したい」 「新しい大型機械を導入するが、搬入から据付まで一括で任せたい」
                        「老朽化したキュービクル（変圧器）を、安全に、短期間で入れ替えたい」<br>
                        <span class="sentences-paragraph"></span>
                        私たちKEnKIは、このような工場設備に関するあらゆる課題を解決する専門家集団です。<br>
                        特に、10t、20tを超えるような「重量物」の扱いは、一瞬のミスも許されない、極めて高度な専門技術と緻密な計画、そして何よりも「安全」への強い信念が求められます。<br>
                        私たちは、そのすべてでお客様の期待に応え、日本のものづくりを足元から支えます。
                    </p>
                </div>
                <div class="right-part thumb-wrapper pc">
                    <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipmentimg111.jpg"
                        alt="KEnKIの重機事業とは？">
                </div>
            </div>
        </div>
    </section>

    <section class="services-section section-type1">
        <div class="container">
            <div class="section-title">
                <p class="en-title font-60-700 font-en main-color">SERVICE</p>
                <h2 class="jp-title font-16-700">サービス内容</h2>
            </div>
        </div>
        <ul class="services-list items-list">
            <li class="service-item list-item">
                <div class="left-right">
                    <div class="left-part">
                        <div class="part-container">
                            <p class="number-label">
                                <span class="label font-60-500 font-roboto">SERVICE.</span><span
                                    class="number font-100-500 font-roboto">1</span>
                            </p>
                            <h3 class="main-title font-30-900">工場設備の搬入・据付</h3>
                            <p class="desc font-20-500">
                                新規設備導入に伴う、大型機械の搬入・開梱・据付作業です。クリーンルーム内の精密機械から、10tを超える大型プレス機まで、建屋や周辺設備に細心の注意を払いながら、ミリ単位の精度で設置します。
                            </p>
                        </div>
                    </div>
                    <div class="right-part thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipservice101.jpg"
                            alt="工場設備の搬入・据付">
                    </div>
                </div>
            </li>
            <li class="service-item list-item">
                <div class="left-right reverse">
                    <div class="left-part">
                        <div class="part-container">
                            <p class="number-label">
                                <span class="label font-60-500 font-roboto">SERVICE.</span><span
                                    class="number font-100-500 font-roboto">2</span>
                            </p>
                            <h3 class="main-title font-30-900">工場内レイアウト変更・移設</h3>
                            <p class="desc font-20-500">
                                生産ラインの効率化や変更に伴う、既存設備の移設・再配置作業です。工場の稼働停止時間を最小限に抑えるため、お客様の生産計画に合わせたスピーディーかつ確実な作業計画をご提案します。
                            </p>
                        </div>
                    </div>
                    <div class="right-part thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipservice102.jpg"
                            alt="工場内レイアウト変更・移設">
                    </div>
                </div>
            </li>
            <li class="service-item list-item">
                <div class="left-right">
                    <div class="left-part">
                        <div class="part-container">
                            <p class="number-label">
                                <span class="label font-60-500 font-roboto">SERVICE.</span><span
                                    class="number font-100-500 font-roboto">3</span>
                            </p>
                            <h3 class="main-title font-30-900">電気設備（キュービクル等）<br class="sp">の更新</h3>
                            <p class="desc font-20-500">
                                工場の心臓部である高圧受電設備（キュービクル）や変圧器、発電機などの入れ替え作業です。専門知識が必要な電気設備の取り扱いはもちろん、重量物としての搬入・搬出・据付まで一貫して安全に実施します。
                            </p>
                        </div>
                    </div>
                    <div class="right-part thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipservice103.jpg"
                            alt="電気設備（キュービクル等）の更新">
                    </div>
                </div>
            </li>
            <li class="service-item list-item">
                <div class="left-right reverse">
                    <div class="left-part">
                        <div class="part-container">
                            <p class="number-label">
                                <span class="label font-60-500 font-roboto">SERVICE.</span><span
                                    class="number font-100-500 font-roboto">4</span>
                            </p>
                            <h3 class="main-title font-30-900">機械の解体・搬出</h3>
                            <p class="desc font-20-500">
                                不要になった機械や設備の解体・搬出作業です。周辺設備や建物を傷つけないよう安全に解体し、搬出経路を確保しながら、場外へ確実運び出します。
                            </p>
                        </div>
                    </div>
                    <div class="right-part thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipservice104.jpg"
                            alt="機械の解体・搬出">
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section class="concept-section section-type2">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">重量物とは？</h2>
            <ul class="items-list">
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipconcept101.jpg"
                            alt="産業機械">
                    </div>
                    <h3 class="item-title font-18-700 main-color">産業機械</h3>
                    <p class="item-desc font-14-400">
                        工作機械や産業ロボットなど、工場設備の運搬・設置を行います。汎用機から専用機まで対応し、大型機械の分解・組立も一括してお任せください。
                    </p>
                </li>
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipconcept102.jpg"
                            alt="業務用エアコン室外機">
                    </div>
                    <h3 class="item-title font-18-700 main-color">業務用エアコン室外機</h3>
                    <p class="item-desc font-14-400">
                        工場や店舗で使用される業務用エアコン室外機の設置・更新（取り替え）作業です。屋上設置の大型タイプも、安全・確実に搬入・据付を行います。
                    </p>
                </li>
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipconcept103.jpg"
                            alt="キュービクル">
                    </div>
                    <h3 class="item-title font-18-700 main-color">キュービクル</h3>
                    <p class="item-desc font-14-400">
                        工場やビルに必要な高圧受電設備（キュービクル）の設置・更新工事です。老朽化に伴う入れ替えも、搬入が困難な場所でも安全に作業します。
                    </p>
                </li>
                <li class="list-item">
                    <div class="thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/heavyequipconcept104.jpg"
                            alt="トランス">
                    </div>
                    <h3 class="item-title font-18-700 main-color">トランス</h3>
                    <p class="item-desc font-14-400">
                        キュービクルの心臓部である変圧器（トランス）の運搬・設置を行います。電気使用量の変更に伴うトランスの増設・減設工事もお任せください。
                    </p>
                </li>
            </ul>
            <h3 class="other-title font-18-700 main-color">
                その他の重量物
            </h3>
            <p class="other-desc font-14-400">
                ソーラーパネル、コンテナハウス、大型モニター、使用済み機械の搬出など、人力で運べない重量物全般に対応します。<br>
                展示会パネルの設営・撤去も可能です。
            </p>
        </div>
    </section>

    <section class="safety-section section-type3">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">安全への徹底した取り組み</h2>
            <h3 class="sub-title font-24-700">安全は何よりも優先される。<br class="sp">KEnKIの安全管理体制。</h3>
            <p class="top-desc font-16-500">
                私たちは、作業スタッフ一人ひとりが「自分の身は自分で守る」「仲間の安全も守る」という強い意識を持つことが、無事故を達成する唯一の道だと考えています。
            </p>
            <ul class="items-list">
                <li class="list-item">
                    <h4 class="item-title font-24-700 main-color">
                        1. 徹底したKY活動（危険予知）
                    </h4>
                    <p class="item-desc font-16-400">
                        作業開始前のミーティングで、その日の作業に潜むあらゆる危険を全員で洗い出し、共有します。「～かもしれない」という予測を立て、事前に対策を講じることで事故を未然に防ぎます。
                    </p>
                </li>
                <li class="list-item">
                    <h4 class="item-title font-24-700 main-color">
                        2. 定期的な安全教育と資格取得支援
                    </h4>
                    <p class="item-desc font-16-400">
                        ベテランから若手まで、全スタッフが定期的に安全教育を受講し、知識と意識のアップデートを行っています。また、玉掛け、フォークリフト、高所作業車など、業務に必要な資格の取得を会社が全面的にサポートし、専門性を高めています。
                    </p>
                </li>
                <li class="list-item">
                    <h4 class="item-title font-24-700 main-color">
                        3. 適切な保護具・機材の点検と使用
                    </h4>
                    <p class="item-desc font-16-400">
                        ヘルメット、安全帯、安全靴はもちろんのこと、作業内容に応じた適切な保護具の着用を徹底します。また、使用するワイヤーロープや吊り具、工具は、必ず始業前に点検し、少しでも異常があれば使用しません。
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="flow-section">
        <div class="container">
            <h2 class="main-title font-32-900 main-color">問い合わせから<br class="sp">施工完了までの流れ</h2>
            <p class="sub-title font-18-700">元請けとして初めてご依頼いただくお客様も、<br class="sp">安心してご相談ください。</p>
            <ul class="flow-steps">
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label font-12-400 font-en">STEP</div>
                            <div class="num font-30-500 font-roboto">01</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title font-24-700">
                                お問い合わせ
                            </h3>
                            <p class="desc font-14-400">
                                お電話またはお問い合わせフォームより、お気軽にご連絡ください。<br>
                                分かる範囲で結構ですので、機械の種類、重量、現場の状況（「工場の2階に設置したい」など）をお聞かせください。
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
                                現地調査・お打ち合わせ
                            </h3>
                            <p class="desc font-14-400">
                                担当者が迅速に現場へお伺いし、搬入経路、設置場所、周辺の障害物、床の耐荷重などを詳細に確認します。<br>
                                お客様のご要望や、工場の稼働スケジュールを詳しくヒアリングいたします。
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
                                ご提案・お見積もり
                            </h3>
                            <p class="desc font-14-400">
                                現地調査の結果に基づき、安全で効率的な施工計画書と、作業工程表、詳細なお見積もりを無料でご提出します。<br>
                                不明瞭な点は一切残しません。
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
                                ご契約・施工
                            </h3>
                            <p class="desc font-14-400">
                                計画内容にご納得いただけましたら、ご契約となります。<br>
                                経験豊富な作業責任者のもと、安全第一で、確実・丁寧な施工を行います。
                            </p>
                        </div>
                    </div>
                </li>
                <li class="each-step">
                    <div class="step-wrapper">
                        <div class="step-number">
                            <div class="label font-12-400 font-en">STEP</div>
                            <div class="num font-30-500 font-roboto">05</div>
                        </div>
                        <div class="step-content">
                            <h3 class="step-title font-24-700">
                                施工完了・お引き渡し
                            </h3>
                            <p class="desc font-14-400">
                                お客様に最終確認をいただき、施工完了となります。<br>
                                機械の設置精度はもちろん、作業エリアの清掃・原状回復まで責任を持って行います。
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
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
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/staff011.jpg"
                                alt="大石 一生">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-20-700 main-color">
                                重機事業部 部長　佐藤 忠義（さとう ただよし）
                            </h3>
                            <p class="item-desc font-16-500">
                                趣味・特技：スケボー、スノボ、仕事<br>
                                重量物を扱うスペシャリスト。今まで手掛けた仕事の中で、歴史に残るような⼯事も数知れず。仕事が趣味と言えてしまう、現職２０年の大ベテラン。プライベートでも若者に負けず劣らずのアグレッシブなスーパー４０代
                            </p>
                        </div>
                    </div>
                </li>
                <li class="list-item staff-item">
                    <div class="left-right">
                        <div class="left-part thumb-wrapper">
                            <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/staff012.jpg"
                                alt="上松 幹夫">
                        </div>
                        <div class="right-part">
                            <h3 class="item-title font-20-700 main-color">
                                重機事業部 主任　仁多見　哲宇（にたみ　あきたか）
                            </h3>
                            <p class="item-desc font-16-500">
                                趣味・特技：格闘技、音楽<br>
                                会社きってのムードメーカー。仕事もなんでも楽しく、本気でがモットーな熱い中堅リーダー。仁多見主任の名言「空気は読むんじゃない、作るんだ！」
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>

<?php get_footer(); ?>