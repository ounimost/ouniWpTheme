<!------------------------------------------------>
<!-- アーカイブ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main class="main-top">
  <div class="content-area">

    <!-- カテゴリ名の表示 -->
    <?php $title = single_cat_title('', false); ?>
    <?php if ($title) : ?>
      <h2 class="top-header">カテゴリ : <?php echo $title; ?></h2>
    <?php else: ?>
      <h2 class="top-header">すべての記事</h2>
    <?php endif;?>

    <div class="new-post-container">

      <!-- 投稿の数だけ繰り返して処理する -->
      <?php while (have_posts()) : ?>
        
        <!-- 投稿を取得 -->
        <?php the_post(); ?>

        <!-- 投稿を表示 -->
        <div class="new-post">
          <a href="<?php echo get_permalink(); ?>">
            <?php the_post_thumbnail( array( 250, 200 ), array( 'class' => 'new-post-img' ) ); ?>
          </a>
          <h3 class="new-post-header"><a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a></h3>
          <p class="new-post-info">
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
    
  </div> 
</main>

<?php get_footer(); ?>