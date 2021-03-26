<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="p-body__inner p-footerFixed">
        <?php get_template_part('includes/header'); ?>
        <main>
            <section class="l-section --heroLess">
                <div class="l-container__middle js-headerFloatTrigger">
                    <h2 class="p-heading__news --center">お探しのページは見つかりませんでした。</h2>
                </div>
                <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/news'); ?>"><span class="screen-reader-text">ホームに戻る</span>Home</a></p>
            </section>
        </main>
        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </div>
</body>

</html>