<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="l-section --heroLess">
            <div class="l-container__middle">
                <h2 class="p-heading__secondary --center"> <?php the_title(); ?></h2>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="p-article --single">
                            <?php $siteArea = SCF::get('siteArea'); ?>
                            <?php $siteAreaTubo = SCF::get('siteAreaTubo'); ?>
                            <?php $areaFloor = SCF::get('areaFloor'); ?>
                            <?php $areaFloorTubo = SCF::get('areaFloorTubo'); ?>
                            <?php $completion = SCF::get('completion'); ?>
                            <?php $method = SCF::get('method'); ?>
                            <?php $images = SCF::get('image'); ?>
                            <div class="p-contents__text">
                                <?php the_content(); ?>
                            </div>
                            <dl class="p-defineList --dottedLine">
                                <dt>敷地面積</dt>
                                <dd><?php echo esc_html($siteArea); ?>m2(<?php echo esc_html($siteAreaTubo); ?>坪)</dd>
                                <dt>延床面積</dt>
                                <dd><?php echo esc_html($areaFloor); ?>m2(<?php echo esc_html($areaFloorTubo); ?>坪)</dd>
                                <dt>竣工年月</dt>
                                <dd><?php echo esc_html($completion); ?>年</dd>
                                <dt>工法</dt>
                                <dd><?php echo esc_html($method); ?></dd>
                            </dl>
                            <div class="p_contents__thumbnail">
                                <?php foreach ($images as $image) : ?>
                                    <p><?php echo wp_get_attachment_image($image, 'large'); ?> </p>
                                <?php endforeach; ?>
                            </div>




                        </article>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <p>投稿がありません。</p>
                <?php endif; ?>
            </div>


        </section>


        <?php get_template_part('includes/footer'); ?>
        <?php get_footer(); ?>
    </main>
</body>

</html>