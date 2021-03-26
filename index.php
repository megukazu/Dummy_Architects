<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="p-body__inner p-footerFixed">
        <?php get_template_part('includes/header'); ?>
        <main>
            <section class="l-section p-fixedBackground --news">
                <div class="l-container__middle --vertical">
                    <h2 class="p-heading__primary --center  js-headerFloatTrigger">News</h2>
                </div>
            </section>
            <section class="l-section p-section">
                <div class="l-container__middle">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="p-article --border  js-appearItem up">
                                <ul>
                                    <li class="p-contents__label p-button__link">
                                        <?php the_category('$nbsp'); ?>
                                    </li>
                                </ul>
                                <p class="p-contents__text p-button__link">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </p>
                                <p class="p-date__primary --right">
                                    <span><time datetime="<?php the_time(DATE_W3C); ?>"><?php the_time('Y/m/d'); ?></time></span>
                                </p>
                            </article>
                        <?php endwhile; ?>
                        <?php the_posts_pagination(); ?>
                    <?php else : ?>
                        <p>投稿がありません。</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </div>
</body>

</html>