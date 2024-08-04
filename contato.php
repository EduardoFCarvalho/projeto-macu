<?php include 'modules/seo.php' ?>

</head>

<body>
  <?php include 'modules/header.php' ?>

  <section class="banner-area banner-intern">
    <div class="info-area">
      <h1><?= $title ?></h1>
    </div>
  </section>


  <div class="container-fluid about-area spots-l">
    <div class="container section-padding">
      <div class="row align-items-center">

        <div class="col-md-6">
          <form action="processamento.php" method="post">
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Mensagem</label>
              <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>

      </div>
    </div>
  </div>


  <?php include 'modules/cta.php' ?>

  <?php include 'modules/footer.php' ?>

  <?php include 'modules/js.geral.php' ?>
</body>

</html>