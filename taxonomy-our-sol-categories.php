<?php get_header();?>
<section class="container singleAccSolCat">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="breadCrumbsWrapper"><p id="breadcrumbs">','</p></div>');} ?>

    <div>
        <h1><?php single_cat_title(); ?></h1>
        <?php echo category_description(); ?>
    </div> 
    <div class="singlePostWraps">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <div class="contentWrap">
                <h2><?php the_title();?></h2>
                <?php the_excerpt(); ?>
                <a class="button" href="<?php echo get_post_permalink();?>">Learn more</a>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer();?>