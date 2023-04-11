<li class="slider-item">
    
    <div class="comment">
        <?php 
            $summary = get_field('testimonial'); 
            echo wp_trim_words($summary, 84, "...");
        ?>
        <a class="btn-open" data-modal="modal-<?php echo get_the_ID(); ?>">See Full Review</a>
    </div>

    <div class="comment-modal">
        <section class="modal hidden" id="modal-<?php echo get_the_ID(); ?>">
            <div class="flex">
                <button class="btn-close">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M18 6l-12 12"></path>
                        <path d="M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="quote-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="44" viewBox="0 0 451.15 396.006">
                    <path id="Icon_awesome-quote-left" data-name="Icon awesome-quote-left" d="M399.792,195.253h-68.93V140.109a55.2,55.2,0,0,1,55.144-55.144H392.9a20.629,20.629,0,0,0,20.679-20.679V22.929A20.629,20.629,0,0,0,392.9,2.25h-6.893A137.821,137.821,0,0,0,248.147,140.109V346.9A41.368,41.368,0,0,0,289.5,388.256H399.792A41.368,41.368,0,0,0,441.15,346.9V236.611A41.368,41.368,0,0,0,399.792,195.253Zm-248.147,0H82.716V140.109a55.2,55.2,0,0,1,55.144-55.144h6.893a20.629,20.629,0,0,0,20.679-20.679V22.929A20.629,20.629,0,0,0,144.752,2.25h-6.893A137.821,137.821,0,0,0,0,140.109V346.9a41.368,41.368,0,0,0,41.358,41.358H151.645A41.368,41.368,0,0,0,193,346.9V236.611A41.368,41.368,0,0,0,151.645,195.253Z" transform="translate(5 2.75)" fill="none" stroke="#487684" stroke-width="10"/>
                </svg>
            </div>
            
            <?php the_field('testimonial') ?>
        </section>

        <div class="overlay hidden"></div>
    </div>

    <div class="rating">
        <?php
            $rating = get_field('rating'); // Replace 'rating' with the name of your ACF field
            $stars = '';
            
            // Loop through each star and add a filled or unfilled class based on the rating
            for ($i = 1; $i <= 5; $i++) {
                if ($i <= $rating) {
                    $stars .= '
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star-filled" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M8.243 7.34l-6.38 .925l-.113 .023a1 1 0 0 0 -.44 1.684l4.622 4.499l-1.09 6.355l-.013 .11a1 1 0 0 0 1.464 .944l5.706 -3l5.693 3l.1 .046a1 1 0 0 0 1.352 -1.1l-1.091 -6.355l4.624 -4.5l.078 -.085a1 1 0 0 0 -.633 -1.62l-6.38 -.926l-2.852 -5.78a1 1 0 0 0 -1.794 0l-2.853 5.78z" stroke-width="0" fill="currentColor"></path>
                        </svg>
                    ';
                } else {
                    $stars .= '
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-star" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"></path>
                        </svg>
                    ';
                }
            }
        ?>

        <p><?php echo $stars; ?></p>
    </div>
    <div class="reviewer"><?php the_field('reviewer'); ?></div>
</li>

   


