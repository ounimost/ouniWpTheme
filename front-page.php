<!------------------------------------------------>
<!-- トップページ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main class="main-top">

  <!------------------------------------------------>
  <!-- WORKS一覧 -->
  <!------------------------------------------------>
  <div class="content-area">
    <h2 class="top-header">WORKS</h2>
    <div class="new-post-container">

        <div class="new-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/portfolio-site.png" />
          <h3 class="new-post-header"><a href="<?php echo home_url('/works/portfolio'); ?>">ポートフォリオサイト</a></h3>
          <p class="new-post-info">
            <time class="new-post-date" datetime="2021-06-05">2021-06-05</time>
            <br />
            <span class="new-post-category">簡単なポートフォリオサイトです。作成方法の解説ブログも書いています。</span>
            <br />
            <time class="new-post-date">HTML/CSS/Bootstrap</time>
          </p>
        </div>

        <div class="new-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/ouni-wptheme.png" />
          <h3 class="new-post-header"><a href="<?php echo home_url('/works/wptheme'); ?>">OUNI WordPressテーマ</a></h3>
          <p class="new-post-info">
            <time class="new-post-date" datetime="2021-10-22">2021-10-22</time>
            <br />
            <span class="new-post-category">このOUNIサイトでも利用しているWordPressテーマです。作成方法の解説ブログも書いています。</span>
            <br />
            <time class="new-post-date">WordPress/php/css</time>
          </p>
        </div>

        <div class="new-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/toeic-app.png" />
          <h3 class="new-post-header"><a href="<?php echo home_url('/works/toeic-app'); ?>">TOEIC学習アプリ</a></h3>
          <p class="new-post-info">
            <time class="new-post-date" datetime="2022-07-21">2022-07-21</time>
            <br />
            <span class="new-post-category">TOEIC学習アプリです。TOEICの単語テストと出題文の翻訳テストができます。</span>
            <br />
            <time class="new-post-date">React/Tailwind</time>
          </p>
        </div>

        <div class="new-post">
          <img class="category-img" src="<?php echo get_template_directory_uri(); ?>/img/lognote-app.png" />
          <h3 class="new-post-header"><a href="<?php echo home_url('/works/lognote'); ?>">LogNote</a></h3>
          <p class="new-post-info">
            <time class="new-post-date" datetime="2022-09-30">2022-09-30</time>
            <br />
            <span class="new-post-category">日々のログを管理するアプリです。Googleアカウントで認証すれば、日々のログを保存・編集・閲覧ができます。</span>
            <br />
            <time class="new-post-date">React/TypeScript/Tailwind/Firebase</time>
          </p>
        </div>
    </div>
  </div>

  <!------------------------------------------------>
  <!-- BLOG一覧 -->
  <!------------------------------------------------>
  <div class="content-area">
    <h2 class="top-header">BLOG</h2>
    <div class="new-post-container">

      <!-- ページの最大表示投稿数を変更 -->
      <?php query_posts('posts_per_page=8'); ?>

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
    </div>
    
    <!-- ブログ投稿一覧ページへのリンク -->
    <div class="center-btn">
        <a href="<?php echo home_url('/blog'); ?>" class="btn">show more</a>
    </div>

  </div>

  <!------------------------------------------------>
  <!-- カテゴリごとの記事一覧 -->
  <!------------------------------------------------>
  <div class="content-area">
    <div class="category-container">

    <div class="category">
        <h3 class="top-header">React</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/unity'); ?>">show more</a></div>
        </div>	
      </div>

      <div class="category">
        <h3 class="top-header">Unity</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/unity'); ?>">show more</a></div>
        </div>	
      </div>

      <div class="category">
        <h3 class="top-header">WordPress</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/wordpress'); ?>">show more</a></div>
        </div>
      </div>

      <div class="category">
        <h3 class="top-header">eagle</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/wordpress'); ?>">show more</a></div>
        </div>
      </div>


      <div class="category">
        <h3 class="top-header">ポートフォリオサイト</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/portfolio'); ?>">show more</a></div>
        </div>
      </div>


      <div class="category">
        <h3 class="top-header">読書</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/reading'); ?>">show more</a></div>
        </div>
      </div>


      <div class="category">
        <h3 class="top-header">エッセイ</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/essay'); ?>">show more</a></div>
        </div>
      </div>

      <div class="category">
        <h3 class="top-header">ガジェット</h3>
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
                <br />
                <a class="category-post-title" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a>
              </p>
            <?php endforeach; ?>
          </dl>
          <div class="center-btn"><a class="btn" href="<?php echo home_url('/blog/category/gadget'); ?>">show more</a></div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>