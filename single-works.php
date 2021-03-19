<!DOCTYPE html>
<html lang="ja">

<head>
    <?php get_header(); ?>
</head>

<body>
    <?php get_template_part('includes/header'); ?>
    <main>
        <section class="l-section p-section --heroless">
            <div class="l-container__middle">
                <h2 class="p-heading__news"> <?php the_title(); ?></h2>
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
                            <p class="p-contents__block">
                                <?php the_content(); ?>
                            </p>
                            <dl>
                                <dt>敷地面積</dt>
                                <dd><?php echo esc_html($siteArea); ?>m2</dd>
                                <dd>(<?php echo esc_html($siteAreaTubo); ?>坪)</dd>
                                <dt>延床面積</dt>
                                <dd><?php echo esc_html($areaFloor); ?>m2</dd>
                                <dd>(<?php echo esc_html($areaFloorTubo); ?>坪)</dd>
                                <dt>竣工年月</dt>
                                <dd><?php echo esc_html($completion); ?>年</dd>
                                <dt>工法</dt>
                                <dd><?php echo esc_html($method); ?></dd>
                                <ul>
                                    <?php foreach ($images as $image) : ?>
                                        <li><?php echo wp_get_attachment_image($image, 'large'); ?></li>
                                    <?php endforeach; ?>
                                </ul>


                            </dl>

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