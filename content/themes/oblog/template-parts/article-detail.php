    <article class="post">
        <h1 class="post__title">
            <span>
                <?php the_title(); ?>
            </span>
        </h1>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="post__image">
        <div class="post__info">
            <?php the_date(); ?> &bull; by <?php the_author(); ?>
        </div>
        <div class="post__content">
            <?php the_content(); ?>
        </div>
    </article>