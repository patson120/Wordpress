<?php get_header(); ?>

<?php get_template_part('parts/banner'); ?>
<hr class="mt-5 bg-success" style="height: 2px"/>
<h1 class="site__heading text-center font-weight-bold text-uppercase">Actualités</h1>
<hr class="bg-success" style="height: 2px"/>
    <?php get_template_part('parts/taxonomy-menu', 'post'); ?>
    <div class="row justify-content-center">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-sm-4 my-5">
                <?php get_template_part('parts/card', 'post'); ?>
            </div>
        <?php endwhile; endif;  ?>
    </div>
    <?php capitaine_pagination(); ?>

    <hr class="mt-5 bg-success" style="height: 2px"/>
    <h1 class="site__heading font-weight-bold text-center text-uppercase">Quelques modules du sigif</h1>
    <hr class="bg-success" style="height: 2px"/>
    <?php get_template_part('parts/some-modules'); ?>
    <a href="http://localhost/wordpress/module/" target="_blank" class="nav-link btn-outline border border-primary rounded-pill  d-flex justify-content-center mx-auto" style="width: 7rem;">Voir plus</a>
    </div>
    <?php get_footer(); ?>
</div>