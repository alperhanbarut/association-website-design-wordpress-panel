<?php /* Template Name:Hakkımızda Sayfası */ ?>
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
$args = [
    'post_type'      => 'hakkimizda',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC'
];

$posts = new WP_Query($args);
if ($posts->have_posts()):
    $posts_array = [];
    while ($posts->have_posts()): $posts->the_post();
        $posts_array[] = [
            'title'        => get_the_title(),
            'image'        => get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/images/default.jpg',
            'content'      => apply_filters('the_content', get_the_content()),
            'biz_kimiz' => get_post_meta(get_the_ID(), 'hakkimizda_biz_kimiz', true),
            'misyon_yazi' => get_post_meta(get_the_ID(), 'hakkimizda_misyon_yazi', true),
            'bagis_yazi' => get_post_meta(get_the_ID(), 'hakkimizda_bagis_yazi', true),
        ];
    endwhile;
?>
    <section class="hakkimizda_seciton">
        <?php foreach ($posts_array as $post): ?>

            <div class="biz_kimiz">
                <div class="biz_kimiz_sol">
                    <i class="fas fa-users"></i>
                    <h2>Biz Kimiz ?</h2>
                    <p>
                        <?= $post["biz_kimiz"] ?>
                    </p>
                </div>
                <div class="biz_kimiz_sag">
                    <i class="fas fa-bullseye"></i>
                    <h2>Misyonumuz</h2>
                    <p>
                        <?= $post["misyon_yazi"] ?>
                    </p>
                </div>
            </div>

            <div class="bagis">
                <h2>Değişimin Bir Parçası Olun</h2>
                <p>
                    <?= $post["bagis_yazi"] ?>
                </p>
                <a href="<?php echo get_permalink(64); ?>">Şimdi Bağış Yap</a>
            </div>

        <?php endforeach; ?>

    </section>

<?php
endif;
wp_reset_postdata();
get_footer();
?>