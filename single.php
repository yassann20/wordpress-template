<?php
// WordPress のループ開始
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="blog-content">
            <div class="blog-header">
                <p><?php echo __('更新日'); ?><time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date(); ?></time></p>
            </div>
            <div class="blog-inner">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="blog-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="navigation">
                <div class="nav-previous"><?php previous_post_link( '%link', '<< 前の記事へ' ); ?></div>
                <div class="nav-next"><?php next_post_link( '%link', '次の記事へ >>' ); ?></div>
            </div>
        </div>
<?php
    endwhile;
else :
    // 投稿がない場合の処理
    echo __('投稿が見つかりませんでした。');
endif;
// WordPress のループ終了
?>  <?php
// WordPress のループ開始
if (have_posts()) :
    while (have_posts()) :
        the_post();
?>
        <div class="blog-content">
            <div class="blog-header">
                <p><?php echo __('更新日'); ?><time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date(); ?></time></p>
            </div>
            <div class="blog-inner">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="img">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="blog-excerpt">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="navigation">
                <div class="nav-previous"><?php previous_post_link( '%link', '<< 前の記事へ' ); ?></div>
                <div class="nav-next"><?php next_post_link( '%link', '次の記事へ >>' ); ?></div>
            </div>
        </div>
<?php
    endwhile;
else :
    // 投稿がない場合の処理
    echo __('投稿が見つかりませんでした。');
endif;
// WordPress のループ終了
?>