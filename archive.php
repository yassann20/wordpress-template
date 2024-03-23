<?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                );
                $query = new WP_query($args);

                if( $query -> have_posts()) : 
                    while( $query -> have_posts()) :
                        $query -> the_post(); 
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