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

    <div class="main-contents">

        <!-- 記事一覧 -->
        <?php include("part-postlist.php"); ?>

        <!-- 施工事例一覧 -->
        <?php include("part-workslist.php"); ?>

        <!-- イベント一覧 -->
        <?php include("part-eventslist.php"); ?>

    </div>

<?php get_footer(); ?>