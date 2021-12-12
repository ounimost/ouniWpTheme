<!------------------------------------------------>
<!-- 固定ページ -->
<!------------------------------------------------>
<?php get_header(); ?>

<main class="main-single">
  <?php while (have_posts()) : ?>
    <div class="content-single">
      <?php the_post(); ?>
      <h1><?php echo the_title(); ?></h1>
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>