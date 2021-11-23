<?php
/* Template Name: Socioambiental */
$estiloPagina = 'page.css';
require_once('header.php');
?>

<section class="banner-interno socioambiental">
  <?php the_post_thumbnail(); ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>

<section class="conteudo socioambiental">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 socioambiental__galeria">
        <div id="galeria-socioambiental" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item">
              <img class="d-block" src="<?php bloginfo('template_url'); ?>/assets/images/galeria-socioambiental/socioambiental-origem.jpg" alt="Vina + UFMG">
              <div class="carousel-caption d-md-block">
                <h5>A ORIGEM</h5>
                <p>A partir de 2006, foi criado um espaço original, coerente com o conceito socioambiental
                  deste departamento: reutilização, geração de renda e inclusão social.</p>
                <a href="https://issuu.com/vinavina/docs/pr_ticas_socioambientais_de_corresp_f2f9e295463540" target="_blank" rel="noopener noreferrer">Saiba mais</a>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block" src="<?php bloginfo('template_url'); ?>/assets/images/galeria-socioambiental/socioambiental-vina-ufmg.jpg" alt="Vina + UFMG">
              <div class="carousel-caption d-md-block">
                <h5>VINA + UFMG: Sensibilização - Sala da Profa. Maria Tereza Aguiar</h5>
                <p>Espaço criado a partir da reutilização de materiais e com geração de renda para sensibilizar a comunidade
                  acadêmica e os visitantes que por ali passam para a importância das questões socioambientais</p>
                <a href="https://issuu.com/vinavina/docs/vina_dossi__-_ufmg_fim" target="_blank" rel="noopener noreferrer">Saiba mais</a>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block" src="<?php bloginfo('template_url'); ?>/assets/images/galeria-socioambiental/socioambiental-projeto-arace.jpg" alt="Projeto Aracê">
              <div class="carousel-caption d-md-block">
                <h5>PROJETO ARACÊ: inclusão social via mercado formal de trabalho</h5>
                <p>O objetivo desse projeto é sensibilizar outras empresas para a viabilidade dessa proposta de inclusão e justiça social, chamando atenção para a corresponsabilidade empresarial</p>
                <a href="https://issuu.com/vinavina/docs/vina_dossi__arac__2007_2017_web_fin" target="_blank" rel="noopener noreferrer">Saiba mais</a>
              </div>
            </div>

            <div class="carousel-item">
              <img class="d-block" src="<?php bloginfo('template_url'); ?>/assets/images/galeria-socioambiental/socioambiental-nova-sede.jpg" alt="Projeto Nova Sede">
              <div class="carousel-caption d-md-block">
                <h5>PROJETO NOVA SEDE: construção inteligente</h5>
                <p>Em 2014, a Vina inaugurou a sua nova sede, reafirmando, com um projeto multidisciplinar e inovador, a sua proposta de corresponsabilidade socioambiental</p>
                <a href="https://issuu.com/vinavina/docs/pr_ticas_socioambientais_de_corresp_f2f9e295463540" target="_blank" rel="noopener noreferrer">Saiba mais</a>
              </div>
            </div>

            <div class="carousel-item">
              <a href="https://drive.google.com/file/d/1cxeQ4_8KiUCztb99t7-S56AwMIQMbB4f/view" target="_blank" rel="noopener noreferrer">
                <img class="d-block" src="<?php bloginfo('template_url'); ?>/assets/images/galeria-socioambiental/praticas-socioambientais.jpg" alt="Práticas Socioambientais">
              </a>
            </div>
          </div>

          <ol class="carousel-indicators" href="#galeria-socioambiental">
            <li data-target="#galeria-socioambiental" data-slide-to="0">Nossa Origem</li>
            <li data-target="#galeria-socioambiental" data-slide-to="1">Parceria UFMG</li>
            <li data-target="#galeria-socioambiental" data-slide-to="2">Projeto Aracê</li>
            <li data-target="#galeria-socioambiental" data-slide-to="3">Empresa Parque</li>
            <li data-target="#galeria-socioambiental" data-slide-to="4">Práticas Socioambientais</li>
          </ol>

          <a class="carousel-control-prev" href="#galeria-socioambiental" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#galeria-socioambiental" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

          <?php endwhile;
        else : ?>

          <p>Não há posts publicados</p>

        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php
require_once('footer.php');
?>