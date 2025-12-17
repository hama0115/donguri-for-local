<aside class="sidebar">
    <div class="sidebar_item side_profile">
          <div class="profile_img">
              <?php //フロントページのカスタムフィールドで設定した画像を表示
              $profile = get_field('profile-img');
              if ($profile): ?>
                  <img src="<?php echo $profile['url']; ?>" alt="<?php echo $profile['alt']; ?>">
              <?php else: //設定画像がない場合はテーマに入った画像を表示 ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/gray.png" alt="">
              <?php endif; ?>
          </div>
          <div class="profile_textarea">
              <p class="profile_name txt-center">喜多 柊人</p>
              <p class="profile_desc txt-14">伊勢市出身、在住のカイロプラクター。副業として山に入り、猟をすることも。主なエリアは伊勢市や鳥羽市、伊賀市。二見を根城にしているしゅんちゃん熊を駆除したことで有名。</p>
          </div>
    </div>
    <div class="sidebar_item">
          <p>新着記事</p>
          <?php
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => '5',
          );
          $new_query = new WP_Query($args);
          if($new_query->have_posts()): while($new_query->have_posts()): $new_query->the_post();
          ?>

          <div class="post-title">
              <a href="<?php the_permalink() ?>">
                <p><?php the_title(); ?></p>
              </a>
          </div>

          <?php endwhile;
          wp_reset_postdata();
          else: ?>
             <p>投稿がありません。</p>
          <?php endif; ?>
    </div>
</aside>