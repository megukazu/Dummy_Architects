<?php
$args = array(
    'posts_per_page' => 3
);
$the_query = new WP_Query($args);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="p-body__inner p-footerFixed">
        <?php get_template_part('includes/header'); ?>
        <main>
            <div class="swiper-container p-hero">
                <div class="swiper-wrapper p-hero_thumbnail">
                    <div class="swiper-slide">
                        <div class="slide-img --first"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img --second"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img --third"></div>
                    </div>
                </div>
                <div class="p-heroTitle js-headerFloatTrigger">
                    <?php if(get_field('kv_text')): ?>
                    <h1 class="p-heading__primary --center">
                        <?php the_field('kv_text'); ?>
                    </h1>
                    <?php endif; ?>
                </div>
            </div>
            <section class="l-section p-fixedBackground --primary">
                <div class="l-container__middle --vertical">
                    <h2 class="p-heading__primary --center js-typing">AboutUs</h2>
                    <?php if('top_about_text'): ?>
                    <p class="p-contents__text js-appearItem up">
                      <?php the_field('top_about_text'); ?>
                    </p>
                    <?php endif; ?>
                    <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/aboutus'); ?>"><span class="screen-reader-text">会社概要ページへ移動</span>Read More</a></p>
                </div>
            </section>
            <section class="l-section p-fixedBackground --secondary">
                <div class="l-container__middle --vertical">
                    <h2 class="p-heading__primary --center js-typing">Works</h2>
                    <?php if(get_field('top_works_text')): ?>
                    <p class="p-contents__text js-appearItem up">
                       <?php the_field('top_works_text'); ?>
                    </p>
                    <?php endif; ?>
                    <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/works'); ?>"><span class="screen-reader-text">施工実績へ移動</span>Read More</a></p>
                </div>
            </section>
            <section class="l-section">
                <div class="l-container__middle">
                    <h2 class="p-heading__primary --center js-typing">News</h2>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <article class="p-article --border js-appearItem up">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="p-contents__text"><?php the_title(); ?></p>
                                    <p class="p-date__primary --right"><time datetime="<?php the_time(DATE_W3C); ?>"><?php the_time('Y/m/d'); ?></time></p>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/postlist'); ?>"><span class="screen-reader-text">ニュース一覧へ移動</span>Read More</a></p>
                </div>
            </section>
        </main>
        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </div>
</body>

</html>