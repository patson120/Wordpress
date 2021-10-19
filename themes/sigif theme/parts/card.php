<article class="card h-100">
    <?php the_post_thumbnail('post_thumbnail', ['class'=> 'card-img-top', "alt"=> '', "style"=> "height: 18rem"]); ?>
    <div class="card-body px-4">
        <h2 class="card-title"> <?php the_title(); ?> </h2>
        <p class="post__meta">
            Publié le <?php the_time(get_option('date_format')) ?>
            par <?php the_author(); ?> &bull; <?php comments_number($zero="0 commentaires"); ?>
        </p>
        <?php the_excerpt(); ?>
        <!-- <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6> -->
        <ul>
            <?php the_terms(get_the_ID(), "sport", '<li>', '</li><li>', '</li>'); ?>
        </ul>
        
        <p>
            <a href=" <?php the_permalink(); ?> " class="btn btn-primary card-link">Lire la suite</a>
        </p>
    </div>
</article>