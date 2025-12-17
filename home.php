<!-- ブログの記事一覧ページ -->
<?php get_header(); ?>
    <main class="blog_page pb-10">
        <div class="blog-wrapper">
            <div class="archive-title">
              <h1>ブログ</h1>
              <p>blog</p>
            </div>
            <div class="archive-desc">駆け出しの猟師としても活動する「カイロプラクティックどんぐり」管理人のブログです。主に猟師の活動、伊賀市などについて発信していきます。</div>
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <section class="card_list">
                        <a href="<?php the_permalink(); ?>" class="card">
                            <div class="card_pic">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                <?php else: ?>
                                  <img src="<?php echo get_template_directory_uri(); ?>/img/gray.png" alt=""> 
                                <?php endif; ?>
                            </div>
                            <div class="card_body">
                                <h2 class="card_title"></h2>
                                <time></time>
                            </div>
                        </a>
                    </section>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>記事がありません</p>
                <?php endif; ?>         
        </section>

        <!-- サイドバーのテンプレートの読み込み -->
        <?php get_sidebar(); ?>        
    <!-- mainの閉じタグはfooter.phpにある -->
<?php get_footer(); ?>