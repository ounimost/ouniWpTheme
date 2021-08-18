<?php get_header(); ?>

<main class="container">
<!----------------------------------------------------------
         新着記事 
------------------------------------------------------------->
	<div class="bg-light p-5">
		<h1 class="topTitle text-center pb-5">新着の記事</h1>
		<div class="container">
			<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();　?>
                <div class="col-md-3 col-sm-6 col-xs-12 mb-5">
							<figure class="newPostFigure">
								<?php the_post_thumbnail(array( 224, 126 ), array( 'class' => 'img-fluid' ) ); ?>
							</figure>
							<p class="newPostCategory"><a href=""><?php the_category(', '); ?></a></p>
							<div class="px-2">
								<time class="newPostDate" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
								<h4 class="lead"><a href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></h4>
							</div>
					</div>
			<?php endwhile; endif;　?>
			</div>
		</div>
		<div class="otherPost"><a class="otherPostButton" href="https://ouni.work/blog/">ほかの記事</a></div>
	</div>

<!----------------------------------------------------------
         カテゴリごとの記事
------------------------------------------------------------->
	<div class="row m-0 my-3">
		
		<!-- Unityカテゴリの記事 -->
		<div class="col p-5 m-3 bg-light">
			<h1 class="topTitle text-center">Unityでゲーム開発</h1>
			<p class="newPostDate text-center pb-3"
			   >UnityやDoozyUIなどのゲーム開発について</p
				>
			<div class="mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/unity.jpg" />
			</div>
			<?php
				$newarrival = get_posts(array(
					'posts_per_page' => 6, 		// 表示件数指定
					'category' => 11 					// カテゴリID指定
				));
			?>
			<dl class="categoryPost">
					<?php foreach($newarrival as $post): setup_postdata($newarrival);?>
					<div>
							<dt class="categoryPostDate"><?php the_time('Y.m.d'); ?></dt>
							<dd class="categoryPostTitle"><a class="categoryPostTitle" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></dd>
					</div>
				<?php endforeach; ?>
			</dl>
			<div class="otherPost"><a class="otherPostButton" href="https://ouni.work/blog/category/unity/">ほかの記事</a></div>
		</div>	
		
		<!-- WordPressカテゴリの記事 -->
		<div class="col p-5 m-3 bg-light">
			<h1 class="topTitle text-center">WordPressでサイト制作</h1>
			<p class="newPostDate text-center pb-3"
			   >UnityやDoozyUIなどのゲーム開発について</p
				>
			<div class="mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/wordpress.jpg" />
			</div>
			<?php
				$newarrival = get_posts(array(
					'posts_per_page' => 6, 		// 表示件数指定
					'category' => 5 					// カテゴリID指定
				));
			?>
			<dl class="categoryPost">
					<?php foreach($newarrival as $post): setup_postdata($newarrival);?>
					<div>
							<dt class="categoryPostDate"><?php the_time('Y.m.d'); ?></dt>
							<dd class="categoryPostTitle"><a class="categoryPostTitle" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></dd>
					</div>
				<?php endforeach; ?>
			</dl>
			<div class="otherPost"><a class="otherPostButton" href="https://ouni.work/blog/category/wordpress/">ほかの記事</a></div>
		</div>	
		
	</div>
	
	<div class="row m-0 my-3">
		
		<!-- ポートフォリオのつくりかたの記事 -->
		<div class="col p-5 m-3 bg-light">
			<h1 class="topTitle text-center">ポートフォリオサイトのつくりかた</h1>
			<p class="newPostDate text-center pb-3"
			   >HTMLとCSSでシンプルなポートフォリをサイトをつくります</p
				>
			<div class="mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/portfoliio.jpg" />
			</div>
			<?php
				$newarrival = get_posts(array(
					'posts_per_page' => 6, 		// 表示件数指定
					'category' => 12 					// カテゴリID指定
				));
			?>
			<dl class="categoryPost">
					<?php foreach($newarrival as $post): setup_postdata($newarrival);?>
					<div>
							<dt class="categoryPostDate"><?php the_time('Y.m.d'); ?></dt>
							<dd class="categoryPostTitle"><a class="categoryPostTitle" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></dd>
					</div>
				<?php endforeach; ?>
			</dl>
			<div class="otherPost"><a class="otherPostButton" href="https://ouni.work/blog/category/portfolio/">ほかの記事</a></div>
		</div>	
		
		<!-- エッセイの記事 -->
		<div class="col p-5 m-3 bg-light">
			<h1 class="topTitle text-center">エッセイ</h1>
			<p class="newPostDate text-center pb-3">技術的な観点で日々のできごとを綴っています</p>
			<div class="mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/essey.jpg" />
			</div>
			<?php
				$newarrival = get_posts(array(
					'posts_per_page' => 6, 		// 表示件数指定
					'category' => 13 					// カテゴリID指定
				));
			?>
			<dl class="categoryPost">
					<?php foreach($newarrival as $post): setup_postdata($newarrival);?>
					<div>
							<dt class="categoryPostDate"><?php the_time('Y.m.d'); ?></dt>
							<dd class="categoryPostTitle"><a class="categoryPostTitle" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></dd>
					</div>
				<?php endforeach; ?>
			</dl>
			<div class="otherPost"><a class="otherPostButton" href="https://ouni.work/blog/category/essay/">ほかの記事</a></div>
		</div>	
			
	</div>
	
		<div class="row m-0 my-3">
		
		<!-- 読書の記事 -->
		<div class="col p-5 m-3 bg-light">
			<h1 class="topTitle text-center">読んだ本</h1>
			<p class="newPostDate text-center pb-3">本の感想を簡単に書いています。</p>
			<div class="mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/book.jpg" />
			</div>
			<?php
				$newarrival = get_posts(array(
					'posts_per_page' => 6, 		// 表示件数指定
					'category' => 17 					// カテゴリID指定
				));
			?>
			<dl class="categoryPost">
					<?php foreach($newarrival as $post): setup_postdata($newarrival);?>
					<div>
							<dt class="categoryPostDate"><?php the_time('Y.m.d'); ?></dt>
							<dd class="categoryPostTitle"><a class="categoryPostTitle" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></dd>
					</div>
				<?php endforeach; ?>
			</dl>
			<div class="otherPost"><a class="otherPostButton" href="https://ouni.work/blog/category/reading/">ほかの記事</a></div>
		</div>	
		
		<!-- ガジェットの記事 -->
		<div class="col p-5 m-3 bg-light">
			<h1 class="topTitle text-center">ガジェット</h1>
			<p class="newPostDate text-center pb-3">お気に入りのガジェットなどを紹介します。</p>
			<div class="mb-5">
				<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/gadgets.jpg" />
			</div>
			<?php
				$newarrival = get_posts(array(
					'posts_per_page' => 6, 		// 表示件数指定
					'category' => 16 					// カテゴリID指定
				));
			?>
			<dl class="categoryPost">
					<?php foreach($newarrival as $post): setup_postdata($newarrival);?>
					<div>
							<dt class="categoryPostDate"><?php the_time('Y.m.d'); ?></dt>
							<dd class="categoryPostTitle"><a class="categoryPostTitle" href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></dd>
					</div>
				<?php endforeach; ?>
			</dl>
			<div class="otherPost"><a class="otherPostButton" href="https://ouni.work/blog/category/gadget/">ほかの記事</a></div>
		</div>	
			
	</div>
	
</main>

<?php get_footer(); ?>