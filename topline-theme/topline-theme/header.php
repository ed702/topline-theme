<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> - <?php wp_title(); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?ver=<?php echo time(); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="hero-header">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.png" alt="خلفية الهيدر" class="header-bg">



  <nav class="main-nav">
    <?php
      wp_nav_menu([
        'theme_location' => 'main-menu',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => false
      ]);
    ?>
  </nav>

  <div class="hero-text" id="home">
    <p>شركة</p>
    <h1>أفراس</h1>
    <h3>للسفر والسياحة</h3><br>
    <p>وكالة أفراس للسفر والسياحة <br>تأسست الوكالة منذ 2016</p>
  </div>
</header>
