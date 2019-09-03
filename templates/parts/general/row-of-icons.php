<div class="rowOfIconsSec">
    <div class="container">
        <?php if(get_field('row_of_icons')): ?>
                <?php while(has_sub_field('row_of_icons')): ?>
					<?php if (get_sub_field('jkg_icon_link')):?>
						<a href="<?php echo get_sub_field('jkg_icon_link'); ?>">
					<?php endif; ?>
                <div class="iconWrapper">
                    <img src="<?php echo the_sub_field('icon_image'); ?>" />
                    <h4><?php echo the_sub_field('icon_title'); ?></h4>
                </div>
				<?php if (get_sub_field('jkg_icon_link')):?>
					</a>
				<?php endif; ?>
                <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>