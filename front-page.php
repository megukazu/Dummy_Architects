<!DOCTYPE html>
<html lang="ja">
<head>
    <?php get_header(); ?>
</head>
<body>
   <?php get_template_part('includes/header'); ?>
    <main>
        <div class="wrapper">//全体のラッパー（画像を囲むdivタグの調整用）
            <ul id="slide_wrapper">//スライドのラッパー
                <li class="slide_items">//スライド画像を挟み込むliタグ
                    <img src="http://hiro-contribution.com/wp-content/uploads/2020/01/2020-01-03-1711.jpg" alt="" width="640" height="427" class="alignnone size-full wp-image-340" />
                </li>
                <li class="slide_items">
                    <img src="http://hiro-contribution.com/wp-content/uploads/2020/01/2020-01-03-1713.jpg" alt="" width="640" height="427" class="alignnone size-full wp-image-341" />
                </li>
                <li class="slide_items">
                    <img src="http://hiro-contribution.com/wp-content/uploads/2020/01/2020-01-03-1714.jpg" alt="" width="640" height="427" class="alignnone size-full wp-image-342" />
                </li>
            </ul>
        </div>
        <section class="l-section ">
            <h2>AboutUs</h2>
        </section>
        <section class="l-section">
            <h2>Works</h2>
        </section>
        <section class="l-section">
            <h2>News</h2>
        </section>
        <section class="l-section">
            <h2>Access</h2>
        </section>
    </main>
    
    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>
</html>