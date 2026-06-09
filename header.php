<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>
  <?php the_title(); ?>｜<?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php the_title(); ?>｜<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <header>
      <h1>エドベース株式会社</h1>
      <nav class="header-nav">
        <?php wp_nav_menu(); ?>
      </nav>
  </header>

