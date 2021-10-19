<article class="card h-100">
    <?php the_post_thumbnail('post_thumbnail', ['class'=> 'card-img-top w-100', "alt"=> '', "style"=> "height: auto"]); ?>
    <div class="card-body px-4">
        <h2 class="card-title h5"> <?php the_title(); ?> </h2>
        <p class="post__meta">
            Publié le <?php the_time(get_option('date_format')) ?>
            par <?php the_author(); ?> &bull; <?php comments_number($zero="0 commentaires"); ?>
        </p>
        <!-- <?php the_excerpt(); ?> -->
        <ul class="nav mb-4">
            <?php the_terms(get_the_ID(), "actualite", '<li class="nav-item">', '</li><li class="nav-item">', '</li>'); ?>
        </ul>
        <p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary card-link">Lire la suite</a>
        </p>
    </div>
</article>