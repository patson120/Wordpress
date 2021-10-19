<?php get_header(); ?>

<?php get_template_part('parts/taxonomy-menu', 'post'); ?>

    <h1 class="site__heading mt-4">Le Blog de capitaine WP</h1>
        <div class="row justify-content-center">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <div class="col-sm-6 my-5">
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
    </div>

<?php get_footer(); ?>
</div>