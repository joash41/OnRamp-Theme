<?php get_header()?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		<div class="container">
            <h1 style="text-align: center; margin: 40px 0 20px 0;"><?php the_title(); ?></h1>
            <?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer()?>