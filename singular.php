<!-- 個別投稿 -->
<?php get_header(); ?>
    <main class="blog_page pb-10">
        <div class="blog_content_wrapper inner flex">
            <div class="blog_wrapper">
                <?php if(have_posts()): ?>
                    <article>
                    <?php while(have_posts()): the_post(); ?>                      
                        <h1 class="post_title txt-24"><?php the_title(); ?></h1>
                        <div class="post-info">
                            <!-- 投稿日時の表示 -->
                            <p class="post_date">
                              <time datetime="<?php the_time('Y-m-d'); ?>" class="txt-14"><?php the_time('Y年m月d日') ?></time>
                            </p>
                            <!-- カテゴリーをリンクで出力 -->
                            <?php
                            $categories = get_the_category();
                            if($categories):
                            ?>
                            <div class="category">
                                <div class="category_list flex">
                                    <?php foreach ($categories as $category): ?>
                                        <div class="category_item">
                                            <a href="<?php echo get_category_link($category); ?>"><?php echo $category->name; ?></a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!-- サムネイルがある場合、元画像の大きさで表示する -->
                        <div class="thumbnail_area">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/gray.png" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="post_content">
                          <?php the_content(); ?>
                        </div>
                    </article>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>記事がありません</p>
                <?php endif; ?>
            </div>
            <!-- サイドバーのテンプレートの読み込み -->
            <?php get_sidebar(); ?>
        </div>
    <!-- mainの閉じタグはfooter.phpにある -->
<?php get_footer(); ?>