<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="l-section --heroLess js-headerFloatTrigger">
            <h2 class="p-heading__primary --center  js-headerFloatTrigger">Works</h2>
        </section>

        <section class="l-section p-section">
            <div class="l-container__middle">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>

                        <article class="p-article__card">
                            <a href="<?php the_permalink(); ?>">
                                <figure class="p-article__thumbnail">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/img-default.png" alt="画像はありません。">
                                    <?php endif; ?>
                                </figure>
                                <p class="p-contents__label">
                                    <span>
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'works_genre');
                                        echo esc_html($terms[0]->name);
                                        ?>
                                    </span>
                                </p>
                                <h3 class="p-article__title">
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                        </article>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <p>投稿がありません。</p>
                <?php endif; ?>
            </div>
            <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/contact'); ?>"><span class="screen-reader-text">お問い合わせページへ移動</span>Contact</a></p>
        </section>
        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </main>
</body>

</html>