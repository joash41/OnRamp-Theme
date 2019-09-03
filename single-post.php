<?php get_header(); ?>
	<div class="container sPostWrapper">
		<div class="sideBarContent">
			<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<div class="breadCrumbsWrapper"><p id="breadcrumbs">','</p></div>');} ?>
            <h1 class="pageTitle"><?php the_title();?></h1>
			<div class="categoryWrapper">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					<div class="contentWrap">
                    	<?php the_content(); ?>
					</div>
                <?php endwhile; endif; ?>
			</div>
			<div class="clear"></div>
		</div>
			<!-- -->
		<?php get_sidebar();?>
    </div>
<?php get_footer(); ?>