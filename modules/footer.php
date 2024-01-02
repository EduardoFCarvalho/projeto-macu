<footer class="bg-dark footer-theme">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-4 mb-5">
                <div>
                    <a href="./">
                        <img src="assets/img/logo/logo-macu-white.png" alt="Logo Macunaima">
                    </a>
                    <p class="text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, fugit. Ad quaerat fugit quas nam nobis quam porro quis deleniti aspernatur, nesciunt nemo laudantium fuga vero voluptatem? Sed, necessitatibus iure!</p>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="links">
                    <h3 class="link-title">Links rápidos</h3>
                    <ul>
                        <li><a href="./">Home</a></li>
                        <li><a href="#">Empresa</a></li>
                        <li><a href="#">Serviços</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg-4 contacts">
                <h3 class="cont-title">Contato</h3>
                <ul>
                    <li>
                        <div class="content">
                            <a href="<?= CONF_SITE_MAP_LINK ?>"><i class="fas fa-home"></i> <?= CONF_SITE_STREET ?></a>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <a href="mailto:<?= CONF_SITE_EMAIL ?>"><i class="fas fa-envelope"></i> <?= CONF_SITE_EMAIL ?></a>
                        </div>
                    </li>
                    <li>
                        <div class="content">
                            <a href="tel:<?= CONF_SITE_PHONE_LINK ?>"><i class="fas fa-phone"></i> <?= CONF_SITE_PHONE ?></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container copyr">
        <div class="row">
            <div class="col-12">
                <p class="text-center">&copy; Copyright <?= date('Y'); ?>. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>


    <!-- Scroll Up -->
    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <?php include_once 'modules/lgpd.php' ?>
</footer>