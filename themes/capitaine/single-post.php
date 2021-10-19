<?php get_header(); ?>
    <div class="container">
    <?php if (have_posts()): ?>

        <?php  while (have_posts()): the_post(); ?>
            <h1 class="jumbotron mt-4"><?php the_title(); ?></h1>

            <?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === '1'): ?>
                <p class="alert alert-info p-4">Cet article est sponsorisé</p>
            <?php endif ?>
            <p>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-responsive w-100 rounded">
            </p>
            <div class="post__meta">
                <?= get_avatar(get_the_author_meta('ID'), 40); ?>
                <p> 
                    Publié le <?php the_time(get_option("date_format")); ?> 
                    par <?php the_author(); ?> 
                    Dans la catégorie <?php the_category(); ?>
                    <?php if (the_tags() !== null): ?>
                        Avec les étiquettes <?= the_tags(); ?> 
                    <?php endif; ?>
                </p>
            </div>
            <?php the_content(); ?>

            <h1 class="jumbotron">Actualités relatives</h1>
            <div class="row">
                <?php 
                    $actualites = array_map(function ($term){
                        return $term->term_id;  
                    }, get_the_terms(get_post(), 'actualite'));
                     
                    $query = new WP_Query([
                        'post__not_in' => [get_the_ID()],
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'orderby' => 'rand',
                        'tax_query' => [
                            [
                                'taxonomy' => 'actualite',
                                'terms' => $actualites,
                            ]
                        ]
                    ]);
                    
                    while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="col-sm-4">
                    <?php get_template_part('parts/card', 'post'); ?>
                </div>

                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endwhile;  ?> 
    <?php else: ?>;
        <p>Pas d'article ici</p>
    <?php endif; ?>
    
<?php get_footer(); ?>
