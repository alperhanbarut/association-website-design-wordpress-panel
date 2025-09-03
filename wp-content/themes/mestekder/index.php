<?php get_header(); ?>



<!-- SLİDER -->
<?php
$args = [
  'post_type'      => 'slider',
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
      'desc' =>  get_post_meta(get_the_ID(), 'mestekder_slider_slider_desc', true)
    ];
  endwhile;
?>

  <div class="fullscreen-background" id="fullscreen-bg">
    <div class="fullscreen-text" id="fullscreen-text"></div>
    <div class="fullscreen-desc" id="fullscreen-desc"></div>
  </div>

  <div class="slider-container">
    <button class="nav-btn left" id="nav-left" aria-label="Scroll Left">&#8249;</button>

    <div class="card-track" id="card-track">
      <?php foreach ($posts_array as $post): ?>
        <div class="card">
          <img src="<?= esc_url($post["image"]) ?>" alt="<?= esc_attr($post["title"]) ?>">
          <div class="card-content">
            <h2><?= esc_html($post["title"]) ?></h2>
            <p class="desc"><?= $post["desc"] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <button class="nav-btn right" id="nav-right" aria-label="Scroll Right">&#8250;</button>
  </div>

<?php
endif;
wp_reset_postdata();
?>







<!-- Destekçilerimiz -->


<section class="logo_slider" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/background.jpg');">
  <h2>Destekçilerimiz</h2>
  <div class="slider">
    <div class="slide-track">
      <?php
      $args = array(
        'post_type' => 'destekciler',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      );
      $destekciler = new WP_Query($args);
      if ($destekciler->have_posts()) :
        while ($destekciler->have_posts()) : $destekciler->the_post();
          $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
          if ($thumb) :
      ?>
            <div class="slide">
              <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" height="100" width="250" />
            </div>
      <?php
          endif;
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
  </div>
</section>


<!-- Vizyon Misyon -->
<?php
$args = array(
  'post_type' => 'vizyon_misyon',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  'orderby' => 'menu_order',
  'order' => 'ASC'
);
$posts = new WP_Query($args);

if ($posts->have_posts()):
?>
  <div class="vizyon_misyon_kapsayici">
    <?php while ($posts->have_posts()): $posts->the_post(); ?>
      <?php $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
      <div class="vizyon_misyon_item">
        <div class="vizyon_misyon_image" style="background-image: url('<?php echo esc_url($thumb); ?>');">
        </div>
        <div class="vizyon_misyon_content">
          <h2><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
<?php endif;
wp_reset_postdata(); ?>

<!-- HABERLER -->


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






<!-- EKİBİMİZ -->

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


  <section class="ekibimiz_section" style="background-image: url('<?php echo esc_url($background); ?>');">
    <div class="ekibimiz_baslik">
      <h2>Ekibimizle Tanışın</h2>
    </div>
    <div class="ekip_grid">

      <?php foreach ($posts_array as $post): ?>
        <div class="ekip_card">
          <div class="ekip_img">
            <img src="<?= $post["image"] ?>">
            <div class=" overlay">
              <div class="socials">
                <a href="<?= $post["facebook"] ?>"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="<?= $post["twitter"] ?>"><i class="fa-brands fa-twitter"></i></a>
                <a href="<?= $post["linkedin"] ?>"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="<?= $post["mail"] ?>"><i class="fas fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <h2><?= $post["uyead"] ?></h2>
          <p><?= $post["unvan"] ?></p>
        </div>

      <?php endforeach; ?>

    </div>
  </section>

<?php
endif;
wp_reset_postdata();
?>





<?php get_footer(); ?>