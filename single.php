<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class() ?>>
    <div class="p-body__inner p-footerFixed">
        <?php get_template_part('includes/header'); ?>
        <main>
            <section class="l-section --heroLess">
                <div class="l-container__middle js-headerFloatTrigger">
                    <h2 class="p-heading__news"> <?php the_title(); ?></h2>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="p-article --single">
                                <p class="p-date__primary --inlineBlock">
                                    <a href="<?php the_permalink(); ?>">
                                        <span><time datetime="<?php the_time(DATE_W3C); ?>"><?php the_time('Y/m/d'); ?></time></span>
                                    </a>
                                </p>
                                <p class="p-category --inlineBlock">
                                    <span class="p-contents__label">
                                        <?php the_category('$nbsp'); ?>
                                    </span>
                                </p>
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
                <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/news'); ?>"><span class="screen-reader-text">ニュース一覧へ移動</span>一覧に戻る</a></p>
            </section>
        </main>
        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </div>
</body>

</html>