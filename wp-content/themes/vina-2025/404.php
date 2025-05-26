<?php
$estiloPagina = 'page.css';
require_once('parts/header.php');
?>

<section class="conteudo laranja">
  <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-12 col-md-10">
        <h1>Ops, página não encontrada.</h1>
        <p>Voltar para a <a href="<?= site_url(); ?>">página inicial</a></p>
      </div>
    </div>
  </div>
</section>

<?php
require_once('parts/footer.php');
?>