<div class="logosSec">
    <div class="container">
    <h3><?php the_field('clients_heading'); ?></h3>
    <div class="logosWrapper" data-flickity='{ "cellAlign": "center", "wrapAround": true, "autoPlay": true, "imagesLoaded": true }'>
        <?php  
        $images = get_field('logos');
        foreach( $images as $image ): ?>
        <div class="logoWrapper">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>