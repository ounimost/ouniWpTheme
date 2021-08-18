<?php get_header();　?>

<main class="container">
	<div class="bg-light">

  <?php if(have_posts()): while(have_posts()) : the_post(); ?>
		
		<div class="postTitle">
			<h1 class="postTitleHeader"><?php the_title();?></h1>
			<time class="newPostDate" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>			
		</div>
		
		<div class="postContent">
	    <?php the_content(); ?>			
		</div>
		
  <?php endwhile; endif; ?>

	</div>
</main>

<?php get_footer(); ?>