<?php /* Template Name: Yönetim Kurulu Sayfası */ ?>
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
    'post_type'      => 'ekip',
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
            'uyead' => get_post_meta(get_the_ID(), 'ekibimiz_ayarlari_uyead', true),
            'unvan' => get_post_meta(get_the_ID(), 'ekibimiz_ayarlari_unvan', true),
            'facebook' => get_post_meta(get_the_ID(), 'ekibimiz_ayarlari_facebook', true),
            'twitter' => get_post_meta(get_the_ID(), 'ekibimiz_ayarlari_twitter', true),
            'linkedin' => get_post_meta(get_the_ID(), 'ekibimiz_ayarlari_linkedin', true),
            'mail' => get_post_meta(get_the_ID(), 'ekibimiz_ayarlari_mail', true),
        ];
    endwhile;
?>

    <section class="yonetim_section">

        <?php foreach ($posts_array as $post): ?>
            <div class="yonetim_item">
                <div class="yonetim_sol">
                    <img src="<?= esc_url($post["image"]) ?>">
                </div>
                <div class="yonetim_sag">
                    <h2><?= $post["title"] ?></h2>
                    <p class="unvan"><?= $post["unvan"] ?></p>
                    <p>
                        <?= $post["content"] ?>
                    </p>
                </div>
                <div class="yonetim_sosyal_medya">
                    <a href="<?= $post["facebook"] ?>"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="<?= $post["twitter"] ?>"><i class="fa-brands fa-twitter"></i></a>
                    <a href="<?= $post["linkedin"] ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="<?= $post["mail"] ?>"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        <?php endforeach; ?>

    <?php
endif;
wp_reset_postdata();
get_footer();
    ?>