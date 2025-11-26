<?php get_header(); ?>
    <div class="pagehead-set">
        <div class="pagehead-text">
            <h1><?php the_title(); ?></h1>
            <p><?php echo $slug = get_post(get_the_ID())->post_name; ?></p>
        </div>
    </div>

    <div class="breadcrumb" vocab="http://schema.org/" typeof="BreadcrumbList">
        <div class="container">
        <?php if(function_exists('bcn_display'))
        {
        bcn_display();
        }?>
        </div>
    </div>

    <!-- l-wrapper -->
    <div class="l-wrapper">

        <!-- l-main -->
        <main class="l-main">

        <div class="slim-contents">

            <article> 
                <div class="content-top">
                    <div class="tel-box">
                        <h3>お電話でのお問い合わせ</h3>
                        <a href="tel:">
                            <dl>
                                <dt><img src="<?php bloginfo('template_url');?>/img/tel-icon.png" alt="電話アイコン"></dt>
                                <dd>000-0000-000</dd>
                            </dl>
                            <p class="day">営業時間 00:00〜00:00／定休日 〇〇</p>
                        </a>
                    </div>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <section class="content content-page">
                <?php the_content(); ?>
                </section>
                <?php endwhile; endif; ?>
            </article> 
        </div>

        </main>
        <!-- /l-main -->

    </div>
    <!-- /l-wrapper -->

<?php get_footer(); ?>