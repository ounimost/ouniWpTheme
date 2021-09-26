<?php get_header(); ?>

<main class="container">
  
  <div class="bg-light p-5">
    
    <!-- タイトル -->
    <?php $title = single_term_title('', false); ?>
    <?php if ($title) : ?>
      <h1 class="topTitle text-center pb-5"><?php echo $title; ?></h1>
    <?php else: ?>
      <h1 class="topTitle text-center pb-5">投稿の一覧</h1>
    <?php endif;　?>
    
    <!-- 記事一覧 -->
    <div class="container">
      <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post();　?>
        <div class="col-md-3 col-sm-6 col-xs-12 mb-5">
          <figure class="newPostFigure">
            <?php the_post_thumbnail(array( 224, 126 ), array( 'class' => 'img-fluid' )); ?>
          </figure>
          <div class="px-2">
            <p id="new-post-info">
              <!-- カテゴリを表示する -->
              <span id="new-post-category"><?php the_category(', '); ?></span>
              <!-- 投稿日時をを表示する -->
              <time id="new-post-date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
            </p>
            <h4 class="lead"><a href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></h4>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
    
    <!-- ページネーション -->
    <div class="text-center">
          <?php $pagination = get_the_posts_pagination(); $pagination = preg_replace('/\<h2(.*?)\<\/h2\>/', '', $pagination); echo $pagination; ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>