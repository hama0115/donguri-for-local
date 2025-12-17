<aside class="sidebar">
    <div class="profile-img">
        <?php //フロントページのカスタムフィールドで設定した画像を表示
        $profile = get_field('profile-img');
        if ($profile): ?>
            <img src="<?php echo $profile['url']; ?>" alt="<?php echo $profile['alt']; ?>">
        <?php else: //設定画像がない場合はテーマに入った画像を表示 ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/gray.png" alt="">                          
        <?php endif; ?>
    </div>
    <p class="">喜多 柊人</p>  
</aside>