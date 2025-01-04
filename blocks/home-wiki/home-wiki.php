<section class="section__home-wiki mr-40 ml-40 hidden">
    <div class="grid grid-rows-3 grid-flow-col gap-4">
    <div class="row-span-3 ...">
        <?php if (have_rows('urls')): ?>
            <div class="accordion mb-10 sm:mb-16 mt-3 sm:mt-10">
                <?php while (have_rows('urls')): the_row(); ?>
                    <?php 
                        $title = get_sub_field('title'); 
                    ?>
                    <div class="accordion-item px-4 py-5 sm:px-10 sm:py-9">
                    <button class="flex justify-between items-center w-full font-bricolageGrotesque text-[20px] sm:text-[24px] font-medium sm:font-bold leading-[26.6px] sm:leading-[31.92px] tracking-[-0.04em] sm:tracking-[-0.02em] text-left decoration-skip-ink text-[rgba(0,113,188,1)]">
                        <span><?php echo esc_html($title); ?></span>
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="5" width="13" height="3" fill="black"/>
                            <rect x="5" y="13" width="13" height="3" transform="rotate(-90 5 13)" fill="black"/>
                        </svg>
                    </button>

                    <div class="accordion-content text-[rgba(112,112,112,1)] w-[92%] sm:w-4/5 lg:w-3/5">
                            <p class="font-modern text-[14px] sm:text-[16px] font-normal leading-[18.62px] sm:leading-[21.28px] tracking-[-0.02em] text-left">
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="col-span-2 ...">
        <?php if (have_rows('urls')): ?>
            <div class="accordion mb-10 sm:mb-16 mt-3 sm:mt-10">
                <?php while (have_rows('urls')): the_row(); ?>
                    <?php 
                        $title = get_sub_field('title'); 
                    ?>
                    <div class="accordion-item px-4 py-5 sm:px-10 sm:py-9">
                    <button class="flex justify-between items-center w-full font-bricolageGrotesque text-[20px] sm:text-[24px] font-medium sm:font-bold leading-[26.6px] sm:leading-[31.92px] tracking-[-0.04em] sm:tracking-[-0.02em] text-left decoration-skip-ink text-[rgba(0,113,188,1)]">
                        <span><?php echo esc_html($title); ?></span>
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="5" width="13" height="3" fill="black"/>
                            <rect x="5" y="13" width="13" height="3" transform="rotate(-90 5 13)" fill="black"/>
                        </svg>
                    </button>

                    <div class="accordion-content text-[rgba(112,112,112,1)] w-[92%] sm:w-4/5 lg:w-3/5">
                            <p class="font-modern text-[14px] sm:text-[16px] font-normal leading-[18.62px] sm:leading-[21.28px] tracking-[-0.02em] text-left">
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="row-span-2 col-span-2">
        <?php if (have_rows('urls')): ?>
            <div class="accordion mb-10 sm:mb-16 mt-3 sm:mt-10">
                <?php while (have_rows('urls')): the_row(); ?>
                    <?php 
                        $title = get_sub_field('title'); 
                    ?>
                    <div class="accordion-item px-4 py-5 sm:px-10 sm:py-9">
                    <button class="flex justify-between items-center w-full font-bricolageGrotesque text-[20px] sm:text-[24px] font-medium sm:font-bold leading-[26.6px] sm:leading-[31.92px] tracking-[-0.04em] sm:tracking-[-0.02em] text-left decoration-skip-ink text-[rgba(0,113,188,1)]">
                        <span><?php echo esc_html($title); ?></span>
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect y="5" width="13" height="3" fill="black"/>
                            <rect x="5" y="13" width="13" height="3" transform="rotate(-90 5 13)" fill="black"/>
                        </svg>
                    </button>

                    <div class="accordion-content text-[rgba(112,112,112,1)] w-[92%] sm:w-4/5 lg:w-3/5">
                            <p class="font-modern text-[14px] sm:text-[16px] font-normal leading-[18.62px] sm:leading-[21.28px] tracking-[-0.02em] text-left">
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    </div>

</section>