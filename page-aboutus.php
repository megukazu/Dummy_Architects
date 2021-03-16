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
                <h2 class="c-heading__primary">Works</h2>
            </div>
        </section>

        <section class="l-section p-section">
            <div class="l-container__full">
                
                <?php if(have_posts()): while(have_posts()): the_post();?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <section class="l-section p-section">
            <div class="l-container__full">
            </div>
        </section>
        <section class="l-section">
            <div class="l-container__full">
                <h2 class="p-heading__primary --center" id="overview">OVERVIEW</h2>
                <dl class="p-defineList">
                <dt>会社名</dt>
                <dd>株式会社 Dummy Architects</dd>
                <dt>所在地</dt>
                <dd>東京都架空市架空町1-1-1</dd>
                <dt>設立</dt>
                <dd><time datetime="2019-08-24">2019年8月24日</time></dd>
                <dt>資本金</dt>
                <dd>1,000万円</dd>
                <dt>従業員数</dt>
                <dd>10名</dd>
                <dt>業務内容</dt>
                <dd>住宅・店舗・商業施設などの設計・施工監理</dd>
                </dl>
            </div>
      </section>

        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </main>
</body>

</html>