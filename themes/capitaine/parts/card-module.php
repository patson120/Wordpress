
<article class="card h-100 pt-3 bg-dark">
    <?php the_post_thumbnail('post_thumbnail', ['class'=> 'img mx-auto rounded-circle overflow-hidden', "alt"=> 'icon', "style"=> "height: auto;"]); ?>
    <div class="card-body px-4 text-center">
        <h2 class="card-title h5"> <a href="<?php the_permalink(); ?>" class="text-success"><?php the_title(); ?></a> </h2>
        <p class="post__meta text-white">
            Publié le <?php the_time(get_option('date_format')) ?>
            par <?php the_author(); ?> 
        </p>
    </div>
</article>