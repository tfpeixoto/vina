<footer class="footer-geral">
  <div class="container">
    <div class="row d-flex justify-content-between">
      <div class="col-12 col-md-8 footer-geral__endereco">
        <p>Telefone: <a href="tel:+553134798181">(31) 3479–8181</a><br />
          Endereço: Av. Perimetral, 2521<br />
          Distrito Industrial do Jatobá<br />
          Cep: 30.670 – 845<br />
          Belo Horizonte – Minas Gerais</p>
      </div>

      <div class="col-12 col-md-4 footer-geral__nav">
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
          <li class="marca"><a href="<?php $home = site_url();
                        echo $home; ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/images/marca-vina.png" alt="Vina Gestão de Resíduos Sólidos e Locação de Equipamentos" />
            </a></li>
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