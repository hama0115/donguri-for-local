<?php get_header(); ?>
  <main class="top_page pb-10">
    <?php if(have_posts()): ?>
      <?php while(have_posts()): the_post(); ?>
        <div class="post inner">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <div class="post-meta">
            <span class="post-date"><?php echo get_the_date(); ?></span>
            <span class="post-author"><?php the_author(); ?></span>
          </div>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php else: ?>
      <p>記事がありません</p>
    <?php endif; ?>
  <!-- mainの閉じタグはfooter.phpにある -->
<?php get_footer(); ?>