<?php /* Template Name: Home */?>
<?php get_header()?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<div class="content">
			<?php get_template_part('/templates/parts/homepage/home-hero'); ?>
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer()?>