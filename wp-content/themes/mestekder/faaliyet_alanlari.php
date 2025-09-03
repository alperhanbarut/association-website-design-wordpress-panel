<?php /* Template Name: Faaliyet Alanları Sayfası */ ?>
<?php get_header(); ?>

<div class="banner">
    <h2><?php the_title(); ?></h2>
    <?php if (has_post_thumbnail()) {
        the_post_thumbnail('full', ['alt' => get_the_title()]);
    } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner.jpg" alt="">
    <?php } ?>
</div>

<?php
$args = array(
    'post_type' => 'faaliyetler',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$posts = new WP_Query($args);

if ($posts->have_posts()):
?>
    <div class="faaliyet_kapsayici">
        <?php while ($posts->have_posts()): $posts->the_post();

            $icon_class = rwmb_meta('duyuru_faaliyet_icon');
            $icon = !empty($icon_class) ? $icon_class : 'fa-solid fa-book-open';
        ?>
            <div class="faaliyet_item">
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail('full', ['class' => 'faaliyetler_img']);
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/kisi.jpg" class="faaliyetler_img">';
                }
                ?>
                <div class="faaliyet_icerik">
                    <h2><i class="<?php echo esc_attr($icon); ?>"></i><?php the_title(); ?></h2>
                    <p>
                        <?php the_excerpt(); ?>
                    </p>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php
endif;
wp_reset_postdata();
?>





<div class="son_faaliyetler">
    <div class="son_faaliyetler_baslik">
        <h2>Son Faaliyetlerimiz</h2>
    </div>
    <div class="son_faaliyetler_kapsayici">
        <?php
        $args = array(
            'post_type' => 'son_faaliyetler',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        $posts = new WP_Query($args);

        if ($posts->have_posts()):
        ?>
            <?php while ($posts->have_posts()): $posts->the_post(); ?>
                <div class="son_faaliyetler_card">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full', ['class' => 'son_faaliyetler_img']);
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/kisi.jpg" class="son_faaliyetler_img">';
                    }
                    ?>
                    <div class="son_faaliyetler_icerik">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php
wp_reset_postdata();
get_footer();
?>