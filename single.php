<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="l-section p-section --heroless">
            <div class="l-container__middle">
                <h2 class="p-heading__news"> <?php the_title(); ?></h2>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="p-article --single">
                            <p class="p-date__primary --inlineBlock">
                                <a href="<?php the_permalink(); ?>">
                                    <span><time datetime="<?php the_time(DATE_W3C); ?>"><?php the_time('Y/m/d'); ?></time></span>
                                </a>
                            </p>
                            <ul class="p-category --inlineBlock">
                                <li class="c-content__label">
                                    <?php the_category('$nbsp'); ?>
                                </li>
                            </ul>

                            <p class="p-contents__block">
                                <?php the_content(); ?>
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