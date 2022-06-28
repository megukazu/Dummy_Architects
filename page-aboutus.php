 <?php
  
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
                                <?php if(get_field('message_img')): ?>
                                 <div class="c-gridFlex__item -sp12Of12 -tab6Of12">
                                     <figure class="p-media__thumbnail js-img-parallax js-appearItem right">
                                         <?php
                                            $img = get_field('message_img');
                                            $url = $img['url'];
                                            $alt = $img['alt'];
                                            ?>    
                                            <img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>">
                                     </figure>
                                 </div>
                                 <?php endif; ?>
                                 <?php if(get_field('message_text')): ?>
                                 <div class="p-media__body c-gridFlex__item -sp12Of12 -tab6Of12 js-appearItem left">
                                     <p class="p-media__body"><?php the_field('message_text'); ?></p>
                                 </div>
                                 <?php endif; ?>
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
                     <?php if(have_rows('overview')): ?>
                        <?php while(have_rows('overview')): the_row(); ?>
                        <dl class="p-defineList --dottedLine">
                            <dt><?php the_sub_field('overview_term'); ?></dt>
                            <dd><?php the_sub_field('overview_text'); ?></dd>
                        </dl>
                        <?php endwhile; ?>
                     <?php endif; ?>
                 </div>
                 <p class="l-button js-appearItem up"><a class="c-button p-button" href="<?php echo home_url('/works'); ?>"><span class="screen-reader-text">施工実績ページへ移動</span>Works</a></p>
             </section>
         </main>
         <?php get_template_part('includes/footer'); ?>
         <?php get_footer(); ?>
     </div>
 </body>

 </html>