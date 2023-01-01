<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OUNI</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700;900&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
  <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/favicon/browserconfig.xml">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#000000">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">

  	<!-- Twitter card -->
	<?php
	  $my_id = get_queried_object_id();
	  $my_post = wp_get_single_post($my_id)->post_content;
	  $thumb_id = get_post_thumbnail_id($my_id);
	  $thumb_url = wp_get_attachment_image_src($thumb_id,'full');
    $thumb_url_path = "";
    if ( is_array($thumb_url) && empty($thumb_url)) {
      $thumb_url_path = $thumb_url_path[0];
    }
	  $my_card_summary = str_replace(array("\r", "\n"), '', mb_substr(strip_tags($my_post), 0,150,'UTF-8'));
	?>
	<meta property="og:url" content="<?php echo get_permalink($my_id); ?>">
	<meta property="og:title" content="<?php single_post_title(); ?>">
	<meta property="og:description" content="<?php echo $my_card_summary; ?>">
	<meta property="og:image" content="<?php echo $thumb_url_path; ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ounimost">
  
  <?php wp_head(); ?>
</head>

<body>
  <!------------------------------------------------>
  <!-- ヘッダ -->
  <!------------------------------------------------>
  <header class="site-header">
    <div class="site-header-wrapper">

      <!-- LOGO -->
      <div class="logo">
        <a href="<?php echo home_url(); ?>">
          <img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png"/>
        </a>
      </div>

      <!-- Navi -->
      <nav class="nav">
        <ul class="nav-wrapper">
          <li class="nav-item"></li>
          <li class="nav-item"><a href="<?php echo home_url('/about'); ?>">about</a></li>
          <li class="nav-item"><a href="<?php echo home_url('/works'); ?>">Works</a></li>
          <li class="nav-item"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
          <li class="nav-item"><?php get_search_form(); ?></li>
        </ul>
      </nav>

      

    </div>
  </header>