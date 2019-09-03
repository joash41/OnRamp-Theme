<div class="featuredPostSec" style="background: url('<?php echo get_template_directory_uri(); ?>/images/stickers-bg.jpg') fixed">
    <div class="container">
        <div class="postsWrapper">
            <?php
            $featuredPost = get_field('featured_post');
            //var_dump($featuredPost);
            $postId = $featuredPost->ID;
            ?>
            <h2 class="postTitle"><?php echo $featuredPost->post_title; ?></h2>
            <div class="postContent">
                <?php if($featuredPost->post_excerpt):?>
                    <p><?php echo $featuredPost->post_excerpt; ?></p>
                <?php else:?>
                    <p>We have more content about <?php echo $featuredPost->post_title; ?>, please click the "Read More" button below.</p>
            <?php endif;?>
            </div>
            <a class="onrampBtn" href="<?php echo the_permalink($postId); ?>">Read More</a>
        </div>
        <div class="postsWrapper">
            <h2 class="postTitle"><?php the_field('quote_title'); ?></h2>
            <div  class="postContent"><?php the_field('quote_content'); ?></div>
            <?php 
            $link = get_field('quote_button_link');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="onrampBtn" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            <?php endif; ?>
        </div>
    </div>
</div>