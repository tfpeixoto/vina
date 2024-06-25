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
          <li>
            <a href="https://www.facebook.com/vinasocial/" target="_blank" rel="noopener noreferrer">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/icone-facebook.svg" alt="Facebook Vina" />
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/vinasocial/" target="_blank" rel="noopener noreferrer">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/icone-instagram.svg" alt="Instagram Vina" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>

</html>