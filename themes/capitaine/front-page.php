<?php  get_header(); ?>
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <h1> <?php the_title(); ?></h1>
        <p> <?php the_content(); ?></p>
        <h1>
            hello world
        </h1>
        <?php get_sidebar("homepage"); ?>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>