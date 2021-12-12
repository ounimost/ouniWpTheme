<?php get_header(); ?>

<main class="main-top">
  <div class="content-area">

    <?php if (have_posts()): ?>
   
      <!-- タイトル表示 -->
      <?php if (isset($_GET['s']) && empty($_GET['s'])) : ?>
        <h2 class="top-header">検索キーワード未入力</h2>
      <?php else: ?>
        <h2 class="top-header">
          <?php echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; ?>
        </h2>
      <?php endif; ?>

      <div class="new-post-container">
        <?php while(have_posts()): the_post(); ?>
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
      </div>

      <!-- ページネーション -->
      <div class="post-pagenation">
      <?php the_posts_pagination(
          array(
              'mid_size'      => 2,         // 表示するページ番号の数
              'prev_next'     => true,      // 「前へ」「次へ」のリンクを表示するか
              'prev_text'     => __( '<'),  // 「前へ」リンクのテキスト
              'next_text'     => __( '>'),  // 「次へ」リンクのテキスト
              'type'          => 'list',    
          )
      ); ?>
      </div>

    <?php else: ?>
      <h2 class="top-header" style="margin:150px">記事が見つかりませんでした</h2>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>