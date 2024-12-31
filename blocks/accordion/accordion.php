<section class="accordion__section mx-2 sm:mx-10 px-2 py-5 sm:px-24 sm:py-20">    <?php 
    // Dohvati headline polje
    $headline = get_sub_field('headline');
    ?>

    <!-- Proveri da li je headline definisan -->
    <?php if ($headline): ?>
        <div class="flex justify-center">
        <h2 class="bg-custom-gradient text-center text-transparent font-bricolageGrotesque text-[32px] sm:text-[48px] font-bold leading-[42.56px] sm:leading-[63.84px] tracking-[-0.02em] sm:tracking-[-0.04em] bg-clip-text">
            <?php echo esc_html($headline); ?>
        </h2>
    </div>
<?php endif; ?>

    <?php if (have_rows('accordion_items')): ?>
        <div class="accordion mb-10 sm:mb-16 mt-3 sm:mt-10">
            <?php while (have_rows('accordion_items')): the_row(); ?>
                <?php 
                    $title = get_sub_field('title'); 
                    $content = get_sub_field('content'); 
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
                            <?php echo wp_kses_post($content); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <?php 
$learn_more = get_sub_field('learn_more'); 
if ($learn_more): ?>
    <div class="flex items-center justify-center">
        <a href="<?php echo esc_url($learn_more); ?>" class="inline-block w-[140px] h-[60px] px-[30px] py-[10px] rounded-tl-[30px] rounded-tr-[30px] rounded-br-[30px] rounded-bl-[30px] bg-[rgba(0,113,188,1)] text-white font-normal text-[16px] leading-[40px] text-center no-underline hover:opacity-80 hover:bg-[rgba(0,90,150,1)] transition-opacity duration-300 whitespace-nowrap">
            Learn More
        </a>
    </div>
<?php endif; ?>
</section>
