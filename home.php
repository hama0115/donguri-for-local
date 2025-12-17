<?php get_header(); ?>
    <main class="blog_page pb-10">
        <div class="blog-wrapper">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <div class="post inner">
                    <h1 class="post-title"><?php the_title(); ?></h1>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事がありません</p>
                <?php endif; ?>         
        </div>

        <!-- サイドバーのテンプレートの読み込み -->
        <?php get_sidebar(); ?>        
    <!-- mainの閉じタグはfooter.phpにある -->
<?php get_footer(); ?>