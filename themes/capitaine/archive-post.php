<?php get_header(); ?>

<?php get_template_part('parts/banner'); ?>

<h1 class="site__heading mt-4">Liste des actualités</h1>
    <?php get_template_part('parts/taxonomy-menu', 'post'); ?>
    <div class="row justify-content-center">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-sm-4 my-5">
                <?php get_template_part('parts/card', 'post'); ?>
            </div>
        <?php endwhile; endif;  ?>
    </div>
    <?php capitaine_pagination(); ?>
    <div class="site__sitebar">
        <ul>
            <?php dynamic_sidebar("Blog_sidebar"); ?>
        </ul>
    </div>

    <h1 class="site__heading my-4 text-muted">Quelques des modules du sigif</h1>
    <?php get_template_part('parts/some-modules'); ?>
    <a href="http://localhost/wordpress/module/" target="_blank" class="nav-link btn-outline border border-primary rounded-pill  d-flex justify-content-center mx-auto" style="width: 7rem;">Voir plus</a>
    </div>
    <?php get_footer(); ?>
</div>