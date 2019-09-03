<div class="systemAccSec">
<div class="container">
    <div class="imgWrapper">
        <img src="<?php echo the_field('system_image'); ?>" />
    </div>
    <div class="contentOutsideWrapper">
        <?php if(get_field('system_accordions')): ?>
        <h3><?php the_field('accordion_main_heading'); ?></h3>
        <?php while(has_sub_field('system_accordions')): ?>
            <div class="contentInsideWrapper">
                <div id="accordionTitle" class="accordionTitle"><h4><?php echo the_sub_field('accordion_title'); ?></h4><img src="<?php echo get_template_directory_uri();?>/images/accordion-plus.svg" /></div>
                <div id="contentWrapper" class="contentWrapper"><div id="contentWrapperInside" class="contentWrapperInside"><?php echo the_sub_field('accordion_content'); ?></div></div>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
</div>