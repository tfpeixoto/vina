<footer class="footer footer-home">
  <div class="container">
    <div class="row d-flex justify-content-end">
      <div class="col-12 col-md-10 footer-home__nav">
        <?php
        wp_nav_menu(array(
          'theme_location'  => 'menu-rodape',
          'depth'           => 2,
          'container'       => 'div',
          'container_class' => 'menu-footer',
          'container_id'    => 'navfooter',
          'menu_class'      => 'navbar-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ));
        ?>
      </div>

      <div class="col-12 col-md-2 footer-home__social">
        <ul>
          <li><a href="https://www.facebook.com/vinasocial/" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/images/icone-facebook.png" alt="Facebook Vina" /></a></li>
          <li><a href="https://www.instagram.com/vinasocial/" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/images/icone-instagram.png" alt="Instagram Vina" /></a></li>
          <li><a href="https://wa.me/553196337645" target="_blank" rel="noopener noreferrer"><img src="<?php bloginfo('template_url'); ?>/assets/images/icone-whatsapp.png" class="icone-whatsapp" alt="Whatsapp Vina" /></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>