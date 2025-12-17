<!-- ブログの記事一覧ページ -->
<?php get_header(); ?>
    <main class="blog_page pb-10">
        <div class="blog_content_wrapper inner flex">
            <div class="blog_wrapper">
                <div class="archive_title">
                  <p class="txt-14">blog</p>
                  <h1 class="txt-24">ブログ</h1>
                </div>
                <div class="archive_desc txt-16">駆け出しの猟師としても活動する「カイロプラクティックどんぐり」管理人のブログです。主に猟師の活動、伊賀市などについて発信していきます。</div>
                <?php if(have_posts()): ?>
                    <section class="article_lists">
                    <?php while(have_posts()): the_post(); ?>
                        <article class="article_card">
                            <a href="<?php the_permalink(); ?>" class="card">
                                <div class="card_pic">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else: ?>
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/gray.png" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="card_body">
                                    <time datetime="<?php the_time('Y-m-d'); ?> class="txt-10""><?php the_time('Y年m月d日') ?></time>
                                    <h2 class="card_title txt-14"><?php the_title(); ?></h2>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                    </section>
                <?php else: ?>
                    <p>記事がありません</p>
                <?php endif; ?>
            </div>
            <!-- サイドバーのテンプレートの読み込み -->
            <?php get_sidebar(); ?>
        </div>        
    <!-- mainの閉じタグはfooter.phpにある -->
<?php get_footer(); ?>