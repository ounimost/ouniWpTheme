<!------------------------------------------------>
<!-- 投稿ページ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main class="main-single">
  <?php while (have_posts()) : ?>
    
    <div class="content-single">
      <!-- 投稿を取得 -->
      <?php the_post(); ?>

      <!-- タイトル -->
      <h1><?php echo the_title(); ?></h1>

      <!-- カテゴリ -->
      <span class="new-post-category"><?php the_category(', '); ?></span>
      
      <!-- 投稿日時 -->
      <time class="new-post-date" datetime="<?php the_time('Y-m-d'); ?>">作成日：<?php the_time('Y.m.d'); ?></time>
    </div>

    <!-- アイキャッチ画像 -->
    <?php the_post_thumbnail('full', array( 'class' => 'img-post' ) ); ?>
    
    <!-- 中身 -->
    <div class="content-single">
      <?php the_content(); ?>
    </div>

  <?php endwhile; ?>
</main>

<?php get_footer(); ?>