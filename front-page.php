<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <div class="swiper-container p-hero">
            <div class="swiper-wrapper p-hero_thumbnail">
                <div class="swiper-slide">
                    <div class="slide-img" style="background-image: url('//dummyarchitects.local/wp-content/themes/dummy-architects/dist/img/hero1.jpg');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img" style="background-image: url('//dummyarchitects.local/wp-content/themes/dummy-architects/dist/img/hero2.jpg');"></div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-img" style="background-image: url('//dummyarchitects.local/wp-content/themes/dummy-architects/dist/img/hero3.jpg');"></div>
                </div>
            </div>
            <div class="p-heroTitle">
                <h1 class="p-heroTitle__text">Dummy<br>Architects</h1>
                <p class="p-heroTitle__caption">テストテストテストテストテストテストテストテストテストテストテスト</p>
            </div>
        </div>
        <section class="l-section p-fixedBackground --primary">
            <div class="l-container__middle --vertical">
                <h2 class="p-heading__primary">AboutUs</h2>
                <p class="c-contents__text">テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト</p>
                <p class="l-button"><a class="c-button p-button" href="">Read More</a></p>
            </div>
        </section>
        <section class="l-section p-fixedBackground --secondary">
            <div class="l-container__middle --vertical">
                <h2 class="p-heading__primary">Works</h2>
                <p class="c-contents__text">テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト</p>
                <p class="l-button"><a class="c-button p-button" href="">Read More</a></p>
            </div>
        </section>
        <section class="l-section">
            <div class="l-container__middle">
                <h2 class="p-heading__primary --center">News</h2>
                <article class="p-article --primary">
                    <p class="c-contents__title">テストテストテストテストテストテストテストテストテス</p>
                    <p class="p-date__primary --right">2021年1月1日</p>
                </article>
                <article class="p-article --primary">
                    <p class="c-contents__title">テストテストテストテストテストテストテストテストテス</p>
                    <p class="p-date__primary --right">2021年1月1日</p>
                </article>
                <article class="p-article --primary">
                    <p class="c-contents__title">テストテストテストテストテストテストテストテストテス</p>
                    <p class="p-date__primary --right">2021年1月1日</p>
                </article>
                <p class="l-button"><a class="c-button p-button" href="">Read More</a></p>
            </div>
        </section>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </main>
</body>

</html>