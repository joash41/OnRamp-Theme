<?php get_header();?>
    <article class="accSolWrapper">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="breadCrumbsWrapper"><p id="breadcrumbs">','</p></div>');} ?>
        <div class="categoryWrapper">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
                <div class="contentWrap">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="clear"></div>
    </article>
<?php get_footer();?>