<?php

// Chargement du template header (header.php)
get_header();

if (have_posts()): while (have_posts()): the_post();
    // Chargement du template part "template-parts/article-excerpt"
    get_template_part('template-parts/page-content');
endwhile; endif;

// Chargement du template sidebar (sidebar.php)
get_sidebar();

// Chargement du template footer (footer.php)
get_footer();

?>