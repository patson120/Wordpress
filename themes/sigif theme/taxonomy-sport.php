<?php get_header(); ?>

    <?php get_template_part('parts/taxonomy-menu', 'post'); ?>

    <h1 class="jumbotron">Vos article en rapport avec le <?=  esc_html(get_queried_object()->name); ?></h1>
    <p><?= esc_html(get_queried_object()->description) ?></p>
    <div class="row">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="col-sm-6 mb-5">
                <div class="card">
                <?php the_post_thumbnail('post_thumbnail', ['class'=> 'card-img-top', "alt"=> '', "style"=> "height: 18rem"]); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6>
                        <p class="card-text">
                            <?php the_excerpt(); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="card-link">Lire la suite</a>
                    </div>
                </div>
            </div>
        <?php endwhile; endif; ?>
    </div>
    <?php capitaine_pagination(); ?>
<?php get_footer(); ?>
