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
            <?php the_excerpt(); ?>
        </div>
        <div style="padding:3em;">
            <a style="font-weight:bold;" href="<?php the_permalink(); ?>">Lire l'article en entier</a>
        </div>
    </article>