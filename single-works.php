
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
                     <h2 class="p-heading__secondary --center"><?php the_title(); ?></h2>
                     <?php if (have_posts()) : ?>
                         <?php while (have_posts()) : the_post(); ?>
                             <article class="p-article --single">
                                 <div class="p-contents__text">
                                     <?php the_content(); ?>
                                 </div>
                                <?php if(get_field('site_area')): ?>
                                 <dl class="p-defineList --dottedLine">
                                    
                                    <dt>敷地面積</dt>
                                    
                                    <dd><?php the_field('site_area'); ?></dd>
                                   
                                    <dt>延床面積</dt>
                                    <?php if(get_field('total_floor')): ?>
                                    <dd><?php the_field('total_floor'); ?>m&sup2(坪)</dd>
                                    <?php endif; ?>
                                    
                                    <dt>竣工年月</dt>
                                    <?php if(get_field('completion_date')): ?>
                                    <dd><?php the_field('completion_date'); ?></dd>
                                    <?php endif; ?>
                                    
                                    <dt>工法</dt>
                                    <?php if( get_field('construction_method')): ?>
                                    <dd><?php the_field('construction_method'); ?></dd>
                                    <?php endif; ?>
                                </dl>
                                <?php endif; ?>
                                    
                                <?php if(have_rows('works_images')): ?>
                                 <div class="p_contents__thumbnail">
                                   <?php while(have_rows('works_images')): the_row(); ?>
                                    <?php 
                                    $img = get_sub_field('works_image');
                                    $url = $img['url'];
                                    $alt = $img['alt'];                      
                                    ?>
                                    <figure><img src="<?php echo $url ?>" alt="<?php echo $alt; ?>"></figure>
                                    <?php endwhile ?>
                                 </div>
                                 <?php endif; ?>
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