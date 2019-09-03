<?php get_header();?>
<section class="container singleAccSolCat">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="breadCrumbsWrapper"><p id="breadcrumbs">','</p></div>');} ?>

    <div>
        <h1><?php single_cat_title(); ?></h1>
        <?php echo category_description(); ?>
    </div> 
				<div>
				<?php echo get_field('our_solution_info', 'options'); ?>
			</div>
    <div class="singlePostWraps">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
            <div class="postWrap">
                <h4><?php the_title();?></h4>
                <?php $theExcerpt = get_the_excerpt(); ?>
                <?php if($theExcerpt):?>
                    <p><?php echo $theExcerpt; ?></p>
                    <?php else: ?>
                        <p>We have more content about <?php the_title(); ?>, please click the "Read More" button below.</p>
                    <?php endif;?>
                <a class="btnOnramp" href="<?php echo get_post_permalink();?>">Read more</a>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer();?>