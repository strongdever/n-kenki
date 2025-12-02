<?php get_header(); ?>
<main class="common-main" id="company-page">
    <div class="sub-mainview">
        <div class="pagehead-text">
            <h1 class="jp-title font-40-700"><?php the_title(); ?></h1>
            <p class="en-title font-18-700 font-en">COMPANY</p>
        </div>
        <img class="mainview-img" src="<?php bloginfo('template_url'); ?>/img/companypageimage.jpg"
            alt="<?php the_title(); ?>">
    </div>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>

    <section class="top-section">
        <div class="container">
            <h2 class="top-title font-26-700 main-color">
                「安全」「安心」「高品質」を元に<br>
                お客様のニーズにお応えするの<br class="sp">はもちろんのこと、<br class="pc">
                当社ではこの３共を大切にしています。
            </h2>
            <ul class="items-list">
                <li class="list-item">
                    <div class="item-container">
                        <p class="en-title font-16-700 font-en">Share</p>
                        <h3 class="jp-title font-26-700">共有</h3>
                    </div>
                    <img class="item-bg" src="<?php bloginfo('template_url'); ?>/img/flagbg.png" alt="共有">
                </li>
                <li class="list-item">
                    <div class="item-container">
                        <p class="en-title font-16-700 font-en">Coexistence</p>
                        <h3 class="jp-title font-26-700">共存</h3>
                    </div>
                    <img class="item-bg" src="<?php bloginfo('template_url'); ?>/img/flagbg.png" alt="共存">
                </li>
                <li class="list-item">
                    <div class="item-container">
                        <p class="en-title font-16-700 font-en">Mutual prosoerity</p>
                        <h3 class="jp-title font-26-700">共栄</h3>
                    </div>
                    <img class="item-bg" src="<?php bloginfo('template_url'); ?>/img/flagbg.png" alt="共栄">
                </li>
            </ul>
            <p class="bottom-desc font-20-700">
                地域、お客様、社員と価値観を共有し、<br class="sp">共に生き、共に栄える――<br>
                それが当社の理念です。
            </p>
        </div>
    </section>

    <section class="message-section">
        <img class="section-img pc" src="<?php bloginfo('template_url'); ?>/img/messageimg001.jpg" alt="代表あいさつ">
        <img class="section-img sp" src="<?php bloginfo('template_url'); ?>/img/messageimg001sp.jpg" alt="代表あいさつ">
        <div class="container">
            <div class="main-content">
                <div class="section-title">
                    <p class="en-title font-60-700 font-en main-color">MESSAGE</p>
                    <h2 class="jp-title font-16-700">代表あいさつ</h2>
                </div>
                <div class="left-right">
                    <div class="left-part">
                        <p class="message-content font-14-400">
                            弊社は1988年（昭和６３年）に創立し、架設や橋梁工事とクレーンなどの重機リースをメインに始まりました。<br>
                            現在は、時代の流れやお客様のニーズに合わせ「建築事業」「重機事業」「リース事業」の三本柱でやっております。
                            詳しくは事業内容ページをご参照下さい。
                            <span class="sentences-paragraph"></span>
                            弊社はおかげさまで、２０１８年（平成30年）で満３０周年を迎えることができました。<br>
                            これもひとえに皆々様のご愛顧とご支援の賜物であると、心より感謝申し上げます。<br>
                            ゆえに弊社は、私や弊社を育んで頂いた、お客様や地元地域への恩返しの思いで「繁栄」に貢献させていただいております。
                            <span class="sentences-paragraph"></span>
                            そして、この地元新潟の「街づくり」やお客様ひとりひとりの想いが詰まった「家づくり」を仕事にさせて頂いている事に大変感謝しております。
                            <span class="sentences-paragraph"></span>
                            弊社の理念でもあります「共有」「共存」「共栄」はまさに私の理念でもございます。<br>
                            価値観を共有し、共に生き、共に栄える。<br>
                            この世界不況と呼ばれる現代を乗り越え、さらなる発展を続けるために「共力」は必要不可欠。<br>
                            資本、資源、人口が減りゆく中、争い取り合うのではなくシェアする事で全体の豊かさが生まれる。私はそう感じております。
                            <span class="sentences-paragraph"></span>
                            それがゆえに、弊社では地域やお客様に大切にして頂ける「愛され企業」を目指しております。<br>
                            まだまだ３０周年、今後も時代やニーズに合わせ、進化を続け"１００年企業"となれるよう、日々精進してまいりますので今後ともこの株式会社KEnKIを何卒宜しくお願い致します。
                        </p>
                    </div>
                    <div class="right-part thumb-wrapper">
                        <img class="thumb-img" src="<?php bloginfo('template_url'); ?>/img/presidentimg001.jpg"
                            alt="鈴木 隆三">
                        <h4 class="name font-18-700 main-color">代表取締役 鈴木 隆三</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overview-section common-part">
        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <div class="section-title">
                        <p class="en-title font-60-700 font-en main-color">OVERVIEW</p>
                        <h2 class="jp-title font-16-700">会社概要</h2>
                    </div>
                </div>
                <div class="right-part">
                    <article id="Company-table">
                        <dl>
                            <dt>社名</dt>
                            <dd>株式会社KEｎKI</dd>
                        </dl>
                        <dl>
                            <dt>所在地</dt>
                            <dd>〒950-0922　新潟県新潟市中央区山二ツ4丁目7-23</dd>
                        </dl>
                        <dl>
                            <dt>代表取締役</dt>
                            <dd>鈴木 隆三</dd>
                        </dl>
                        <dl>
                            <dt>従業員数</dt>
                            <dd>23人</dd>
                        </dl>
                        <dl>
                            <dt>設立年月日</dt>
                            <dd>1988年（昭和63年）4月1日</dd>
                        </dl>
                        <dl>
                            <dt>資本金</dt>
                            <dd>2000万円</dd>
                        </dl>
                        <dl>
                            <dt>事業内容</dt>
                            <dd>建築事業、重機事業、リース事業</dd>
                        </dl>
                        <dl>
                            <dt>建設業許可</dt>
                            <dd>新潟県知事許可（般-63）第22511</dd>
                        </dl>
                        <dl>
                            <dt>許可種類</dt>
                            <dd>
                                ■とび・土木工事<br>
                                ■機械器具設置工事<br>
                                ■鋼構造物工事<br>
                                ■大工工事<br>
                                ■産業廃棄物収集運搬<br>
                                ■建築工事業<br>
                                ■タイル・れんが・ブロック工事業<br>
                                ■鉄筋工事業<br>
                                ■土木工事業
                            </dd>
                        </dl>
                        <dl>
                            <dt>主要取引先</dt>
                            <dd>
                                ■日本通運株式会社<br>
                                ■パナソニック ホームズ株式会社<br class="sp"><a
                                    href="https://homes.panasonic.com/">https://homes.panasonic.com/</a><br>
                                ■パナソニックリフォーム株式会社<br class="sp"><a
                                    href="http://home-renovation.panasonic.com/">http://home-renovation.panasonic.com/</a><br>
                                ■オースリーホーム株式会社<br class="sp"><a href="http://www.o-three-home.com">http://www.o-three-home.com</a><br>
                                ■株式会社リトルクラウン<br class="sp"><a href="http://www.littlecrown.biz">http://www.littlecrown.biz</a><br>
                                ■有限会社エコ・リサーチ<br class="sp"><a
                                    href="http://www.eco-research-style.com">http://www.eco-research-style.com</a><br>
                                ■タカテック株式会社<br class="sp"><a href="http://www.takatec.com">http://www.takatec.com</a><br>
                                ■有限会社 建造
                            </dd>
                        </dl>
                        <dl>
                            <dt>取引銀行</dt>
                            <dd>
                                大光銀行　石山支店<br>
                                第四銀行　姥ケ山支店
                            </dd>
                        </dl>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="history-section common-part">
        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <div class="section-title">
                        <p class="en-title font-60-700 font-en main-color">HISTORY</p>
                        <h2 class="jp-title font-16-700">沿革</h2>
                    </div>
                </div>
                <div class="right-part">
                    <article id="Company-history">
                        <div class="company-historylist">
                            <dl>
                                <dt>1988年4月</dt>
                                <dd>
                                    <p>
                                        クレーンリース、とび土木工事業として<br>
                                        初代代表取締役社長 鈴木幸雄により創立。日本通運株式会社様とお取引開始
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>1990年3月</dt>
                                <dd>
                                    <p>
                                        各車両、重機増車及び設備投資計画開始
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>1988年7月</dt>
                                <dd>
                                    <p>
                                        建設業許可追加取得　【機械器具設置工事、鋼構造物工事】
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>1999年10月</dt>
                                <dd>
                                    <p>
                                        現事務所　山二ツへ移転
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2000年12月</dt>
                                <dd>
                                    <p>
                                        株式会社セイコーエンジニアリングと合併、資本金を２０００万円に増資
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2002年3月</dt>
                                <dd>
                                    <p>
                                        自社親睦会　建友会を設立
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2004年6月</dt>
                                <dd>
                                    <p>
                                        パナホーム株式会社(現：パナソニック ホームズ株式会社)様と請負契約
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2005年4月</dt>
                                <dd>
                                    <p>
                                        長谷川 浩司が代表取締役社長に就任
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2011年4月</dt>
                                <dd>
                                    <p>
                                        鈴木　隆三が常務取締役に就任、建築事業部の設立
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2015年5月</dt>
                                <dd>
                                    <p>
                                        鈴木　隆三が代表取締役社長に就任
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2016年4月</dt>
                                <dd>
                                    <p>
                                        大工工事　建設業許可取得
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2016年6月</dt>
                                <dd>
                                    <p>
                                        建築工事業許可取得
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2017年5月</dt>
                                <dd>
                                    <p>
                                        株式会社KEｎKIに社名変更
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2017年5月</dt>
                                <dd>
                                    <p>
                                        建築事業部リノプレ設立
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2018年2月</dt>
                                <dd>
                                    <p>
                                        創立満３０周年達成
                                    </p>
                                </dd>
                            </dl>
                            <dl>
                                <dt>2018年5月</dt>
                                <dd>
                                    <p>
                                        Panasonic住まいパートナーズに加盟
                                    </p>
                                </dd>
                            </dl>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="access-section common-part">
        <div class="container">
            <div class="left-right">
                <div class="left-part">
                    <div class="section-title">
                        <p class="en-title font-60-700 font-en main-color">ACCESS</p>
                        <h2 class="jp-title font-16-700">所在地</h2>
                    </div>
                </div>
                <div class="right-part">
                    <article id="Company-accses">
                        <div class="company-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3148.6947516295236!2d139.08650799999998!3d37.8908207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff4c9474090098f%3A0xf290204458a5aac5!2z5pel5pys44CB44CSOTUwLTA5MjIg5paw5r2f55yM5paw5r2f5biC5Lit5aSu5Yy65bGx5LqM44OE77yU5LiB55uu77yX4oiS77yS77yTIOaWsOa9n-W7uuapn-ODquODvOOCuQ!5e0!3m2!1sja!2sru!4v1764680822721!5m2!1sja!2sru" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="company-accessinfo">
                            <table>
                                <tr>
                                    <th>本店住所</th>
                                    <td>〒950-0922<br>新潟県新潟市中央区山二ツ4丁目7-23</td>
                                </tr>
                                <tr>
                                    <th>お問い合わせ</th>
                                    <td>TEL 025-287-3140<a class="btn-map"
                                            href="https://www.google.com/maps/place/Japan,+%E3%80%92950-0922+Niigata,+Chuo+Ward,+Yamafutatsu,+4-ch%C5%8Dme%E2%88%927%E2%88%9223+%E6%96%B0%E6%BD%9F%E5%BB%BA%E6%A9%9F%E3%83%AA%E3%83%BC%E3%82%B9/@37.8908207,139.0839331,17z/data=!3m1!4b1!4m6!3m5!1s0x5ff4c9474090098f:0xf290204458a5aac5!8m2!3d37.8908207!4d139.086508!16s%2Fg%2F12hmc4lbq?entry=ttu&g_ep=EgoyMDI1MTEyMy4xIKXMDSoASAFQAw%3D%3D&hl=ja"
                                            target="_blank"><img class="map-icon"
                                                src="<?php bloginfo('template_url'); ?>/img/iconmap.svg"></a></td>
                                </tr>
                            </table>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>