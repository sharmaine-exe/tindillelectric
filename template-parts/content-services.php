<div class="service-item">
    <?php $featured_image_url = get_field('featured_image'); ?>
    <img src="<?php echo $featured_image_url; ?>" alt="Service Image">

    <h3 class="text-center"><?php the_title(); ?></h3>

    <p class="text-center"><?php the_field('banner_description');?></p>
    <div class="text-center">
        <a class="btn btn-yellow--outline" href="<?php the_permalink(); ?>">Learn More</a>
    </div>
</div>


