<div class="d-none"><?php  get_header(); ?></div>
<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <div class="Index">
        <div class="drapeau-cameroun">
            <img src="<?= get_template_directory_uri() . '/img/drapeau-du-cameroun-image-animee-0009.gif' ?>" alt="Drapeau du Cameroun">
        </div>
        <div class="logo-minfof">
            <img src="<?= get_template_directory_uri() . '/img/logo-minfof.png' ?>" alt="Logo minfof">
        </div>
        <div class="container-fluid rounded-pill" style="padding: 8px; background: green">
            <div class="rounded-pill" style="padding: 8px; background: red">
                <div class="rounded-pill" style="padding: 8px; background: yellow">
                    <div class="block-accueil bg-success rounded-pill container-fluid position-relative d-md-flex justify-content-between">
                        <h2 class="h4 text-white mx-5 align-text-center w-25 h-100">SYSTEME INFORMATIQUE DE GESTION DES INFORMATIONS FORESTIERES</h2>
                        <h2 class="h4 text-white mx-5 align-text-center w-25 h-100">FOREST INFORMATION MANAGEMENT COMPUTER SYSTEM</h2>
                        <div class="block-cercle rounded-circle position-absolute">
                        </div>

                        <a href="http://localhost/wordpress/blog/" class="nav-link btn startnow bg-success text-white d-flex justify-content-center rounded-pill px-5">Start now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>