<html>
<head>
  <title><?php wp_title('｜', true, 'right'); ?></title>
  <meta name="robots" content="index, follow">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >
  <meta name="format-detection" content="telephone=no">

  <!--ファビコンの指定-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
	
	<!-- Twitter card -->
	<?php
	  $my_id = get_queried_object_id();
	  $my_post = wp_get_single_post($my_id)->post_content;
	  $thumb_id = get_post_thumbnail_id($my_id);
	  $thumb_url = wp_get_attachment_image_src($thumb_id,'full');
	  $my_card_summary = str_replace(array("\r", "\n"), '', mb_substr(strip_tags($my_post), 0,150,'UTF-8'));
	?>
	<meta property="og:url" content="<?php echo get_permalink($my_id); ?>">
	<meta property="og:title" content="<?php single_post_title(); ?>">
	<meta property="og:description" content="<?php echo $my_card_summary; ?>">
	<meta property="og:image" content="<?php echo $thumb_url[0]; ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ounimost">
	
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    
  <?php wp_head(); ?>
</head>

<body>
    <!-- ヘッダ -->
    <header class="mb-5">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png" width="50%" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="https://ouni.work/about/">このサイトについて</a></li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >カテゴリ</a
              >
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://ouni.work/blog/category/unity/">Unity</a>
                <a class="dropdown-item" href="https://ouni.work/blog/category/wordpress/">WordPresss</a>
                <a class="dropdown-item" href="https://ouni.work/blog/category/essay/">エッセイ</a>
                <a class="dropdown-item" href="https://ouni.work/blog/category/gadget/">ガジェット</a>
                <a class="dropdown-item" href="https://ouni.work/blog/category/portfolio/">ポートフォリオサイトのつくりかた</a>
				  	  <a class="dropdown-item" href="https://ouni.work/blog/category/reading/">読書</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="https://ouni.work/portfolio/">ポートフォリオ</a></li>
            <li class="nav-item"><a class="nav-link" href="https://ouni.work/contact/">お問い合わせ</a></li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input
              class="form-control mr-sm-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
              Search
            </button>
          </form>
        </div>
      </nav>
    </header>