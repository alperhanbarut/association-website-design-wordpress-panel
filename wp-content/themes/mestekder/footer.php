<footer>
  <div class="footer-container">
    <div class="footer-left">
      <img src="<?= ts("footer-logo")["url"] ?>" alt="Mestekder Logo">
    </div>

    <div class="footer-center">
      <div class="social-media">

        <?php $facebook = ts("facebook");
        if ($facebook) { ?>
          <a href="<?= esc_url($facebook) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <?php } ?>

        <?php $instagram = ts("instagram");
        if ($instagram) { ?>
          <a href="<?= esc_url($instagram) ?>" target="_blank"><i class="fab fa-instagram"></i></a>
        <?php } ?>

        <?php $whatsapp = ts("whatsapp");
        if ($whatsapp) { ?>
          <a href="<?= esc_url($whatsapp) ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
        <?php } ?>

        <?php $youtube = ts("youtube");
        if ($youtube) { ?>
          <a href="<?= esc_url($youtube) ?>" target="_blank"><i class="fab fa-youtube"></i></a>
        <?php } ?>

      </div>
      <div class="footer-links">
        <?php
        wp_nav_menu([
          "menu" => "footer-menu-1",
          "container" => "",
          "items_wrap" => '<ul>%3$s</ul>',
          "theme_location" => "footer-menu-1",
          "container_id" => ""
        ]);
        ?>
      </div>
    </div>

    <div class="footer-right">
      <div class="up-to-top-button">
        <i class="fa-solid fa-chevron-up"></i>
      </div>
      <p class="copyright">
        <?= ts("copyright") ?>
      </p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<script>
  new WOW().init();
</script>

</body>

</html>