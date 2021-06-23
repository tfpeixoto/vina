<footer class="footer-geral">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-12 col-md-8 footer-geral__endereco">
        <p>Telefone: (31) 3479 – 8181<br />
          Endereço: Av. Perimetral, 2521<br />
          Distrito Industrial do Jatobá<br />
          Cep: 30.670 – 845<br />
          Belo Horizonte – Minas Gerais</p>
      </div>

      <div class="col-12 col-md-4 footer-geral__nav">
        <a href="#"><img src="http://localhost/vina/wp-content/uploads/2021/06/marca-vinaec.png" alt="#" /></a>

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

        <ul class="redes-sociais">
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