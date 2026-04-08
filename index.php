<!-- ブログの記事一覧ページ -->
<?php get_header(); ?>
    <main class="blog_page pb-10">
        <div class="blog_content_wrapper inner flex">
            <div class="blog_wrapper">
                <?php if(is_date()): ?>
                    <div class="archive_title">
                        <h1 class="txt-24"><?php echo get_query_var('year'); ?>年</h1>
                    </div>
                <?php elseif(is_category()): ?>
                    <div class="archive_title">
                        <h1 class="txt-24">カテゴリ: <?php echo get_queried_object()->name ?></h1>
                    </div>
                    <div class="archive_desc txt-16">「<?php echo get_queried_object()->name ?>」に関する記事の一覧です。</div>
                <?php endif; ?>
                <?php if(have_posts()): ?>
                    <section class="article_lists">
                    <?php while(have_posts()): the_post(); ?>
                        <article class="article_card">
                            <a href="<?php the_permalink(); ?>" class="card">
                                <!-- リンクカードのサムネイル画像 -->
                                <div class="card_pic">
                                    <?php if(has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else: ?>
                                      <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg" alt="">
                                    <?php endif; ?>
                                </div>
                                <!-- リンクカードのテキストグループ -->
                                <div class="card_body">
                                    <time datetime="<?php the_time('Y-m-d'); ?>" class="txt-14"><?php the_time('Y年m月d日') ?></time>
                                    <h2 class="card_title txt-16"><?php the_title(); ?></h2>
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