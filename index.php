<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="l-section p-fixedBackground --aboutus">
            <div class="l-container__middle --vertical">
                <h2 class="p-heading__primary --center">News</h2>
            </div>
        </section>

        <section class="l-section p-section">
            <div class="l-container__middle">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="p-article --border">
                            <ul>
                                <li class="p-contents__label">
                                    <?php the_category('$nbsp'); ?>
                                </li>
                            </ul>
                            <p class="p-contents__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </p>
                            <p class="p-date__primary --right">
                                <a href="<?php the_permalink(); ?>">
                                    <span><time datetime="<?php the_time(DATE_W3C); ?>"><?php the_time('Y/m/d'); ?></time></span>
                                </a>
                            </p>
                        </article>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <p>投稿がありません。</p>
                <?php endif; ?>
            </div>


        </section>


        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </main>
</body>

</html>