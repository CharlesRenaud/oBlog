<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="header__content">
        <div class="logo">
          <a href="<?php echo get_home_url(); ?>" class="logo__text"><?php bloginfo('name'); ?></a>
          <div class="logo__baseline"><?php bloginfo('description'); ?></div>
        </div>
        <nav class="main-nav">
          <!-- <ul>
            <li>
              <a href="">Catégories</a>
            </li>
            <li>
              <a href="">A propos</a>
            </li>
            <li>
              <a href="">Contact</a>
            </li>
          </ul> -->
          <?php

          wp_nav_menu([
            'theme_location' => 'main',
            'container' => false
          ])

          ?>
        </nav>
      </div>
      <div class="header__tools">
        <div class="search">
          <form action="" class="search__form">
            <label for="search" class="search__form__label">
              <i class="fa fa-search" aria-hidden="true"></i>
            </label>
            <input type="search" name="search" class="search__form__field" placeholder="Rechercher">
          </form>
        </div>
        <a href="" class="action-button">
          S'abonner
        </a>
      </div>
    </header>
    <main class="main">