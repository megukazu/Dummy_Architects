 <?php $siteArea = SCF::get('siteArea');
    $siteAreaTubo = SCF::get('siteAreaTubo');
    $areaFloor = SCF::get('areaFloor');
    $areaFloorTubo = SCF::get('areaFloorTubo');
    $completion = SCF::get('completion');
    $method = SCF::get('method');
    $images = SCF::get('image');
    ?>
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
                     <h2 class="p-heading__secondary --center"><?php the_title(); ?></h2>
                     <?php if (have_posts()) : ?>
                         <?php while (have_posts()) : the_post(); ?>
                             <article class="p-article --single">
                                 <div class="p-contents__text">
                                     <?php the_content(); ?>
                                 </div>
                                 <?php if ($siteArea) : ?>
                                     <dl class="p-defineList --dottedLine">
                                         <dt>敷地面積</dt>
                                         <dd><?php echo esc_html($siteArea); ?>m&sup2;<?php if ($siteAreaTubo) : ?>(<?php echo esc_html($siteAreaTubo); ?>坪)<?php endif; ?></dd>
                                         <dt>延床面積</dt>
                                         <dd><?php echo esc_html($areaFloor); ?>m&sup2;<?php if ($areaFloorTubo) : ?>(<?php echo esc_html($areaFloorTubo); ?>坪)<?php endif; ?></dd>
                                         <dt>竣工年月</dt>
                                         <dd><?php echo esc_html($completion); ?>年</dd>
                                         <dt>工法</dt>
                                         <dd><?php echo esc_html($method); ?></dd>
                                     </dl>
                                 <?php endif; ?>
                                 <div class="p_contents__thumbnail">
                                     <?php foreach ($images as $image) : ?>
                                         <figure><?php echo wp_get_attachment_image($image, 'large'); ?></figure>
                                     <?php endforeach; ?>
                                 </div>
                             </article>
                         <?php endwhile; ?>
                         <?php the_posts_pagination(); ?>
                     <?php else : ?>
                         <p>投稿がありません。</p>
                     <?php endif; ?>
                 </div>
                 <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/works'); ?>">一覧に戻る</a></p>
             </section>
         </main>
         <?php get_template_part('includes/footer'); ?>
         <?php get_footer(); ?>
     </div>
 </body>

 </html>