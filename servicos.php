<?php include 'modules/seo.php' ?>

</head>

<body>
  <?php include 'modules/header.php' ?>

  <section class="banner-area banner-intern">
    <div class="info-area">
      <h1>Serviços</h1>
    </div>
  </section>


  <div class="container-fluid about-area white-bgd">
    <div class="container section-padding">
      <div class="row align-items-center justify-content-center">
          <?php
          // Array of services
          $services = [
            [
              'title' => 'Criação de site',
              'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
              'image' => 'assets/img/gallery/site.jpg',
            ],
            [
              'title' => 'SEO',
              'description' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
              'image' => 'assets/img/gallery/seo.jpg',
            ],
            [
              'title' => 'Social Media',
              'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
              'image' => 'assets/img/gallery/midias.jpg',
            ],
          ];

          // Loop through services and create cards
          foreach ($services as $service) {
            echo '<div class="col-12 col-md-10 mb-5">';
            echo '<div class="creation-card">';
            echo '<div class="card-img">';
            echo '<img src="' . $service['image'] . '" class="card-img-top" alt="' . $service['title'] . '">';
            echo '</div>';
            echo '<div class="card-content">';
            echo '<h2 class="card-title">' . $service['title'] . '</h2>';
            echo '<p class="card-text">' . $service['description'] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
          ?>
      </div>
    </div>
  </div>


  <?php include 'modules/cta.php' ?>

  <?php include 'modules/footer.php' ?>

  <?php include 'modules/js.geral.php' ?>
</body>

</html>