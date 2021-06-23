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
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>