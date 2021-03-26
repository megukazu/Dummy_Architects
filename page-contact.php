<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class() ?>>
    <div class="p-body__inner p-footerFixed">
        <?php get_template_part('includes/header'); ?>
        <main>
            <section class="l-section p-fixedBackground --contact">
                <div class="l-container__middle --vertical js-headerFloatTrigger">
                    <h2 class="p-heading__primary --center">Contact</h2>
                </div>
            </section>
            <section class="l-section p-section">
                <div class="l-container__middle">
                    <div class="p-form__body">
                        <p class="p-contents__text">お問い合わせは下記をご記入のうえ、<br>送信してください。</p>
                    </div>
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php remove_filter('the_content', 'wpautop'); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
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