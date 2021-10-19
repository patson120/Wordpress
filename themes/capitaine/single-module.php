<?php get_header(); ?>
<div class="container">
    <?php if (have_posts()): ?>
        <?php  while (have_posts()): the_post(); 
            get_template_part('parts/single-module');
        endwhile;  ?> 
    <?php else: ?>;
        <p>Pas d'article ici</p>
    <?php endif; ?>
    <h1>Autres modules</h1>
    <?php get_template_part('parts/some-modules'); ?>
</div>
<?php get_footer(); ?>