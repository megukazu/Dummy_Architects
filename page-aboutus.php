 <?php
    $aboutus_img = SCF::get('aboutus_img');
    $commit = SCF::get('commit');
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
             <section class="l-section p-fixedBackground --aboutus">
                 <div class="l-container__middle --vertical js-headerFloatTrigger">
                     <h2 class="p-heading__primary --center">About Us</h2>
                 </div>
             </section>
             <section class="l-section p-section">
                 <div class="l-container__full">
                     <?php if (have_posts()) : ?>
                         <?php while (have_posts()) : the_post(); ?>
                             <div class="c-gridFlex -gutter p-media">
                                 <div class="c-gridFlex__item -sp12Of12 -tab6Of12">
                                     <figure class="p-media__thumbnail js-img-parallax js-appearItem right">
                                         <?php echo wp_get_attachment_image($aboutus_img, 'large'); ?>
                                     </figure>
                                 </div>
                                 <div class="p-media__body c-gridFlex__item -sp12Of12 -tab6Of12 js-appearItem left">
                                     <p class="p-media__body"><?php echo nl2br($commit); ?></p>
                                 </div>
                             </div>
                         <?php endwhile; ?>
                     <?php else : ?>
                         <p>投稿がありません。</p>
                     <?php endif; ?>
                 </div>
             </section>
             <section class="l-section js-appearItem up">
                 <div class="l-container__full">
                     <h2 class="p-heading__primary --center" id="overview">OVERVIEW</h2>
                     <dl class="p-defineList --dottedLine">
                         <dt>会社名</dt>
                         <dd>株式会社 Dummy Architects</dd>
                         <dt>所在地</dt>
                         <dd>東京都架空市架空町1-1-1</dd>
                         <dt>設立</dt>
                         <dd><time datetime="2010-08-24">2010年8月24日</time></dd>
                         <dt>資本金</dt>
                         <dd>1,000万円</dd>
                         <dt>従業員数</dt>
                         <dd>10名</dd>
                         <dt>業務内容</dt>
                         <dd>住宅・店舗・商業施設などの設計・施工監理</dd>
                     </dl>
                 </div>
                 <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/works'); ?>"><span class="screen-reader-text">施工実績ページへ移動</span>Works</a></p>
             </section>
         </main>
         <?php get_template_part('includes/footer'); ?>
         <?php get_footer(); ?>
     </div>
 </body>

 </html>