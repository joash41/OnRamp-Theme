<div class="solutionsSec">
        <h2 class="solutionTitle"><?php the_field('solutions_title'); ?></h2>
        <div class="container"><?php the_field('solutions_content_info'); ?></div>
        <div class="solutionIcons" data-flickity='{ "watchCSS": true, "cellAlign": "center", "contain": true, "wrapAround": true, "autoPlay": true }'>
            <?php
            $solutions = get_field('solutions');
            foreach( $solutions as $solution ): ?>
			<?php if($solution['solution_link']):?>
				<a href="<?php echo $solution['solution_link']; ?>">
			<?php endif; ?>
            <div class="solutionWrapper">
				<?php $solutionIconImage = $solution['solution_icon__image']; ?>
                <img src="<?php echo $solutionIconImage['url']; ?>" alt="<?php echo $solutionIconImage['alt']; ?>" />
                <h4 class="solutionsTitle"><?php echo $solutionIconImage['title']; ?></h4>
            </div>
			<?php if($solution['solution_link']):?>
				</a>
			<?php endif; ?>
            <?php endforeach; ?>
        </div>
</div>