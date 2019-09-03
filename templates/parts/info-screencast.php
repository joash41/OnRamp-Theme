<div class="buildYourContentSec">
    <div class="container">
        <div class="bycWrapper">
            <div class="bycTitleWrapper">
                <?php if(get_field('build_title_icon')): ?>
                    <img src="<?php echo get_field('build_title_icon'); ?>" />
                <?php endif; ?>
                <h2><?php echo get_field('build_title'); ?></h2>
            </div>
            <div class="bycContent">
                <?php echo get_field('build_content'); ?>
            </div>
            <?php 
                $rows = get_field('checklist');
                if($rows){ ?>
                    <ul class="featureList">
                        <?php foreach($rows as $row){ ?>
                            <li><?php echo $row['build_feature'] ;?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
        </div>
        <?php $videoLink = get_field('build_video_link'); ?>
        <div id="bycImage" class="bycImage<?php if($videoLink){ echo ' imageWithLink'; }?>">
            <img src="<?php echo get_field('build_image'); ?>" />
        </div>
        <div id="lightBoxBYC" class="lightBoxBYC">
            <div id="closeLightBoxBYC" class="closeLightBoxBYC"><i class="fa fa-times-circle" aria-hidden="true"></i><p>Close Window</p></div>
            <?php echo get_field('build_video_link'); ?>
        </div>
    </div>
</div>