<?php get_header(); ?>

<main>
    <div class="main-outer">
        <div class="circle"></div>
        <!--ここからメインコンテンツ-->
        <div class="archive-content">
            <h2 class="center-border"><?php single_cat_title(); ?>記事一覧</h2>
            <div id="archive-inner">
                <?php
                if( have_posts()) : 
                while( have_posts()) :
                    the_post(); 
                ?>
                <article>
                    <a href="<?php the_permalink(); ?>">
                        <div class="category">
                            <p><?php echo get_the_category()[0]->name; ?></p>
                        </div>
                        <div class="img">
                            <?php if(has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/photos/pc/topsample.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <h3 class="title"><?php the_title(); ?></h3>
                        <time datetime="<?php echo get_the_date('Y/m/d'); ?>"><?php echo get_the_date(); ?></time>
                    </a>
                </article>
                <?php
                endwhile;
            else: 
                echo __('投稿が見つかりませんでした。');
            endif; 
                ?>
            </div>
        </div>

        <!--お問い合わせページコンテンツ-->
        <?php get_template_part('template-parts/content', 'contact'); ?>
        
        <!--店マップ・情報コンテンツ-->
        <?php get_template_part('template-parts/content', 'map'); ?>
            </div>
</main>

<?php get_footer(); ?>