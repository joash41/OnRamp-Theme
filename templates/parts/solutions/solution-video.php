<div class="solutionVideoSec">
    <div class="container">
        <h2><?php the_field('video_title'); ?></h2>
        <div id="solutionVidWrapper" class="solutionVidWrapper"><img src="<?php echo get_template_directory_uri();?>/images/laptop-video.png" /></div>
        <div id="lightBoxBYC" class="lightBoxBYC">
            <div id="closeLightBoxBYC" class="closeLightBoxBYC"><i class="fa fa-times-circle" aria-hidden="true"></i><p>Close Window</p></div>
            <?php echo get_field('link_to_video'); ?>
        </div>
    </div>
</div>