<!------------------------------------------------>
<!-- トップページ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main class="main-top">

  <!------------------------------------------------>
  <!-- 新着の記事一覧 -->
  <!------------------------------------------------>
  <div class="content-area">
    <h2 class="top-header">新着記事</h2>
    <div class="new-post-container">

      <!-- ページの最大表示投稿数を変更 -->
      <?php query_posts('posts_per_page=7'); ?>

      <!-- 投稿の数だけ繰り返して処理する -->
      <?php while (have_posts()) : ?>
        
        <!-- 投稿を取得 -->
        <?php the_post(); ?>

        <!-- 投稿を表示 -->
        <div class="new-post">

          <!-- サムネイル画像を表示する -->
          <a href="<?php echo get_permalink(); ?>">
            <?php the_post_thumbnail( array( 250, 200 ), array( 'class' => 'post-img' ) ); ?>
          </a>

          <!-- 投稿のタイトルを表示して、投稿ページへのリンクを張る -->
          <h3 class="new-post-header"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>

          <p class="new-post-info">
            <!-- カテゴリを表示する -->
            <span class="new-post-category"><?php the_category(', '); ?></span>
            <!-- 投稿日時をを表示する -->
            <time class="new-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
          </p>
        </div>

      <?php endwhile; ?>

      <!-- ブログ投稿一覧ページへのリンク -->
      <div class="center-btn">
        <a href="<?php echo home_url('/blog'); ?>" class="btn">▶　すべての記事</a>
      </div>

    </div>

  </div>

  <!------------------------------------------------>
  <!-- カテゴリごとの記事一覧 -->
  <!------------------------------------------------>
  <div class="content-area">
    <div class="category-container">

    <div class="category">
        <h2 class="top-header">React</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/react.png" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 22 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/unity'); ?>">ほかの記事</a></div>
        </div>	
      </div>

      <div class="category">
        <h2 class="top-header">Unity</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/unity.jpg" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 11 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/unity'); ?>">ほかの記事</a></div>
        </div>	
      </div>

      <div class="category">
        <h2 class="top-header">WordPress</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/wordpress.jpg" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 5 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/wordpress'); ?>">ほかの記事</a></div>
        </div>
      </div>

      <div class="category">
        <h2 class="top-header">eagle</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/eagle.png" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 21 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/wordpress'); ?>">ほかの記事</a></div>
        </div>
      </div>


      <div class="category">
        <h2 class="top-header">ポートフォリオサイトのつくりかた</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/portfolio.jpg" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 12 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/portfolio'); ?>">ほかの記事</a></div>
        </div>
      </div>


      <div class="category">
        <h2 class="top-header">読書</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/book.jpg" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 17 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/reading'); ?>">ほかの記事</a></div>
        </div>
      </div>


      <div class="category">
        <h2 class="top-header">エッセイ</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/essey.jpg" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 13 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/essay'); ?>">ほかの記事</a></div>
        </div>
      </div>

      <div class="category">
        <h2 class="top-header">ガジェット</h2>
        <div class="category-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/gadgets.jpg" />
          <?php
                $newarrival = get_posts(array(
                    'posts_per_page' => 6, 		// 表示件数指定
                    'category' => 16 					// カテゴリID指定
                ));
            ?>
			    <dl class="category-post-list">
            <?php foreach ($newarrival as $post): setup_postdata($newarrival);?>
              <p class="new-post-info">
                <time class="category-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/gadget'); ?>">ほかの記事</a></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>