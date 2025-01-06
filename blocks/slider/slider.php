<section class="slider__section mx-[12px] sm:mx-0 overflow-hidden">
    <div class="swiper-container overflow-hidden">
        <div class="swiper-wrapper">
            <?php if( have_rows('slider') ): ?>
                <?php while( have_rows('slider') ): the_row(); 
                    $rating = get_sub_field('rating'); 
                    $review = get_sub_field('review');
                    $name = get_sub_field('name');
                    $job_title = get_sub_field('job_title');
                ?>
                <div class="swiper-slide w-[500px] h-[300px] custom-border pl-16 pr-16 py-10 text-left p-6 text-primary overflow-hidden">
                    <div class="review-content">
                        <div class="rating pb-2.5">
                            <?php 
                            $rating = intval($rating);
                            for ($i = 1; $i <= $rating; $i++): ?>
                                <span class="star filled">&#9733;</span>
                            <?php endfor; ?>
                            <?php 
                            for ($i = $rating + 1; $i <= 5; $i++): ?>
                                <span class="star">&#9734;</span>
                            <?php endfor; ?>
                        </div>
                        <p class="review text-primary pb-6 font-modern text-[14px] sm:text-[18px] font-medium leading-[18px] sm:leading-[23.5px] text-left text-underline-position-from-font text-decoration-skip-ink-none">
                            <?php echo esc_html($review); ?>
                        </p>
                        <div class="reviewer-info">
                            <h4 class="name font-modern text-name leading-[24px] font-medium text-[rgba(0,113,188,0.5)]">
                                <?php echo esc_html($name); ?>
                            </h4>
                            <span class="job-title font-modern text-job leading-[16px] font-normal text-[rgba(0,113,188,0.5)]">
                                <?php echo esc_html($job_title); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php 
            // Prikazivanje description polja
            $description = get_sub_field('description'); 
            if($description): ?>
                <div class="description-container text-center mt-10 mb-40">
                    <div class="description bg-custom-gradient inline-block text-transparent bg-clip-text text-[32px] font-normal leading-[38.4px] tracking-[-0.04em] text-center">
                        <?php echo wp_kses_post($description); ?>
                    </div>
                </div>
            <?php endif; ?>
    </div>
</section>
