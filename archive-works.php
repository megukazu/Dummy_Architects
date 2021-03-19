<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="l-section ">
            <h2 class="p-heading__primary">Works</h2>
        </section>

        <section class="l-section p-section">
            <div class="l-container__middle">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>">
                            <article class="p-article --primary">
                                <figure>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/img/img-default.png" alt="画像はありません。">
                                    <?php endif; ?>
                                </figure>
                                <ul>
                                    <li class="c-content__label">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'works_genre');
                                        echo esc_html($terms[0]->name);
                                        ?>
                                    </li>
                                </ul>
                                <p class="c-contents__title">

                                    <?php the_title(); ?>

                                </p>
                            </article>
                        </a>
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