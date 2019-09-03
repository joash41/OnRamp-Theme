<div class="solutionsSlideSec" style="background: <?php the_field('slider_background_color');?>">
    <div class="container">
        <section class="contentSlider" data-flickity='{ "cellAlign": "left", "wrapAround": true, "pageDots": false}'>
            <?php $contentSlider = get_field('slider');
            foreach ($contentSlider as $slide) {;?>
                <div class="singleSlide">
                    <a class="gallery_image" href="<?php echo $slide['image']['url'];?>">
                        <img src="<?php echo $slide['image']['sizes']['medium'];?>" alt="<?php echo $slide['image']['alt'];?>" />
                    </a>
                    <h4><?php echo $slide['title'];?></h4>
                    <p><?php echo $slide['content'];?></p>
                </div>
            <?php }?>
        </section>
    </div>
</div>