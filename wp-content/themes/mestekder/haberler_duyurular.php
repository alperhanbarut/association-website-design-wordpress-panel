<?php /* Template Name: Haberler & Duyurular Sayfası */ ?>
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
    'post_type' => 'haberlerr',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$posts = new WP_Query($args);

if ($posts->have_posts()):
?>
    <section class="haber_section">
        <h2>Öne Çıkan Haberler</h2>
        <div class="slider_wrapper">
            <button class="slider_btn prev">&#10094;</button>
            <div class="haber_kapsayici">

                <?php while ($posts->have_posts()): $posts->the_post(); ?>
                    <div class="haber_item">
                        <?php
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('full', ['class' => 'haber_img']);
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/haber.jpg" class="haber_img">';
                        }
                        ?>
                        <div class="haber_icerik">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>"><i class="fa-solid fa-caret-right"></i> Devamını Oku ...</a>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
            <button class="slider_btn next">&#10095;</button>
        </div>
    </section>
<?php
endif;
wp_reset_postdata();
?>


<?php
$args = [
    'post_type'      => 'duyuru',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC'
];

$posts = new WP_Query($args);

if ($posts->have_posts()):
    $posts_array = [];
    while ($posts->have_posts()):
        $posts->the_post();
        $posts_array[] = [
            'title'   => get_the_title(),
            'image'   => get_the_post_thumbnail_url(get_the_ID(), 'full'),
            'content' => get_the_content(),
            'yayin_tarih' =>  get_post_meta(get_the_ID(), 'duyuru_yayin_tarih', true)
        ];
    endwhile;
?>
    <div class="duyuru_kapsayici">
        <div class="duyuru_baslik">
            <h2>Mestekder’den Haberler & Duyurular</h2>
        </div>
        <div class="duyurular">
            <?php foreach ($posts_array as $post): ?>
                <div class="duyuru_card">
                    <div class="duyuru_icon">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <h2><?= $post["title"] ?></h2>
                    <p><?= $post["content"] ?></p>
                    <span>
                        <p><?= $post["yayin_tarih"] ?></p>
                    </span>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
<?php
endif;
wp_reset_postdata();
?>

<?php
wp_reset_postdata();
get_footer();
?>