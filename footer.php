<section class="cta-section">
    <div class="container">
        <div class="left-right">
            <div class="left-part">
                <div class="section-title">
                    <p class="en-title font-60-700 font-en">CONTACT</p>
                    <h2 class="jp-title font-16-700">お問い合わせ</h2>
                </div>
                <p class="section-desc font-12-500">
                    サービスの内容については、こちらからお問い合わせください。<br class="pc">
                    お電話・メールフォームにてお問い合わせを受け付けております。
                </p>
            </div>
            <div class="right-part">
                <div class="contacts">
                    <div class="contact-tel">
                        <div class="contact-label">
                            <img class="label-icon" src="<?php bloginfo('template_url'); ?>/img/telicon2.svg"
                                alt="TELアイコン">
                            <p class="label-text font-16-700">お電話でのお問い合わせ</p>
                        </div>
                        <div class="btn-tel-wrapper">
                            <a class="btn-tel" href="tel:025-287-3140">
                                <img class="btn-icon" src="<?php bloginfo('template_url'); ?>/img/telicon3.svg"
                                    alt="TELアイコン">
                                <span class="btn-text font-30-700 font-tel">025-287-3140</span>
                            </a>
                            <p class="business-time font-12-500">営業時間9:00-18:00 (定休日/土日祝)</p>
                        </div>
                    </div>
                    <div class="contact-mail">
                        <div class="contact-label">
                            <img class="label-icon" src="<?php bloginfo('template_url'); ?>/img/mailicon2.svg"
                                alt="TELアイコン">
                            <p class="label-text font-16-700">メールでのお問い合わせ</p>
                        </div>
                        <p class="part-desc font-13-500">
                            お気軽にお問い合わせください。<br>
                            担当者よりご連絡いたします。
                        </p>
                        <a class="btn-mail" href="">
                            <span class="btn-text font-14-700">メールフォーム</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--l-footer-->
<footer class="footer">
    <div class="container">
        <div class="left-right">
            <div class="left-part">
                <a class="btn-logo" href="<?php bloginfo('url'); ?>/">
                    <img class="logo-img" src="<?php bloginfo('template_url'); ?>/img/logo3.svg"
                        alt="<?php wp_title(); ?>" />
                </a>
                <p class="address-text font-15-500">
                    株式会社KEnKI<br>
                    〒950-0922<br>
                    新潟県新潟市中央区山二ツ４丁目7-23
                </p>
                <p class="contact-text font-15-500">
                    電話番号：025-287-3140<br>
                    FAX：025-287-3142
                </p>
            </div>
            <div class="right-part">
                <div class="nav-menus">
                    <ul class="mobile-nav-menu">
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/">
                                <span class="font-15-500">トップページ</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/reason/">
                                <span class="font-15-500">選ばれる理由</span>
                            </a>
                        </li>
                        <li class="has_submenu">
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/service/">
                                <span class="font-15-500">事業内容</span>
                                <div class="btn-extend"></div>
                            </a>
                            <div class="sub-menus">
                                <ul class="sub-menu">
                                    <a href="<?php bloginfo('url'); ?>/service/heavyequipment/" class="sub-menu-link">
                                        <span class="font-15-500">重機事業</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/service/construction/" class="sub-menu-link">
                                        <span class="font-15-500">建築事業</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/service/heavylift/" class="sub-menu-link">
                                        <span class="font-15-500">重量物</span>
                                    </a>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="mobile-nav-menu">
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/company/">
                                <span class="font-15-500">会社概要</span>
                            </a>
                        </li>
                        <li>
                            <a class="menu-link" href="<?php bloginfo('url'); ?>/recruit/">
                                <span class="font-15-500">採用情報</span>
                            </a>
                        </li>
                        <li class="has_submenu">
                            <div class="menu-link">
                                <span class="font-15-500">ブログ</span>
                                <div class="btn-extend"></div>
                            </div>
                            <div class="sub-menus">
                                <ul class="sub-menu">
                                    <a href="<?php bloginfo('url'); ?>/news/" class="sub-menu-link">
                                        <span class="font-15-500">お知らせ</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/column/" class="sub-menu-link">
                                        <span class="font-15-500">コラム</span>
                                    </a>
                                    <a href="<?php bloginfo('url'); ?>/stuff/" class="sub-menu-link">
                                        <span class="font-15-500">スタッフブログ</span>
                                    </a>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright-privacy">
            <p class="copyright-text font-10-400">
                Copyright © 2016 KENKI. All Rights Reserved
            </p>
            <a class="btn-privacy font-12-400" href="">
                プライバシーポリシー
            </a>
        </div>
    </div>
</footer>
<!-- /l-footer -->
<?php wp_footer(); ?>
</body>

</html>