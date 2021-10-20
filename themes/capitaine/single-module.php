<?php get_header(); ?>

<div class="container">
    <?php if (have_posts()): ?>
        <?php  while (have_posts()): the_post(); 
            get_template_part('parts/single-module');
        endwhile;  ?> 
    <?php else: ?>;
        <p>Pas d'article ici</p>
    <?php endif; ?>
    <hr class="mt-5 bg-success" style="height: 2px"/>
    <h1 class="font-weight-bold text-center text-uppercase">Autres modules</h1>
    <hr class="bg-success" style="height: 2px"/>
    <?php get_template_part('parts/some-modules'); ?>
</div>

<?php get_footer(); ?>