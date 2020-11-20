<?php
/*
Template Name: Tartiflette
*/

// Chargement du template header (header.php)
get_header();

if (have_posts()): while (have_posts()): the_post();
    // Chargement du template part "template-parts/article-excerpt"
    get_template_part('template-parts/page-content');
endwhile; endif;

?>

<img src="https://static.750g.com/images/auto-427/e2cf6b454dbab8fde0a57d8fee8025ed/tartiflette.jpeg" alt="">

<?php

// Chargement du template footer (footer.php)
get_footer();

?>