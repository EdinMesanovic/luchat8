<section class="accordion_section px-10">
    <?php 
    // Dohvati headline polje
    $headline = get_sub_field('headline');
    ?>

    <!-- Proveri da li je headline definisan -->
    <?php if ($headline): ?>
        <h2 class="font-bricolageGrotesque text-[48px] font-extrabold leading-[63.84px] tracking-[-0.04em] text-center bg-clip-text text-transparent bg-custom-gradient">
            <?php echo esc_html($headline); ?>
        </h2>
    <?php endif; ?>

    <?php if (have_rows('accordion_items')): ?>
        <div class="accordion">
            <?php while (have_rows('accordion_items')): the_row(); ?>
                <?php 
                    $title = get_sub_field('title'); 
                    $content = get_sub_field('content'); 
                ?>
                <div class="accordion-item mr-24 ml-24 pr-4 pl-4 mb-0">
                <button class="font-bricolageGrotesque text-[24px] font-bold leading-[31.92px] tracking-[-0.02em] text-left decoration-skip-ink text-[rgba(0,113,188,1)] mb-5">
                    <?php echo esc_html($title); ?>
                </button>
                <div class="accordion-content font-modern text-[16px] font-normal leading-[21.28px] tracking-[-0.02em] text-left text-[rgba(112,112,112,1)] my-5">
                    <?php echo wp_kses_post($content); ?>
                </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

    <?php 
$learn_more = get_sub_field('learn_more'); 
if ($learn_more): ?>
    <div class="flex items-center justify-center">
        <a href="<?php echo esc_url($learn_more); ?>" class="my-20 inline-block w-[140px] h-[60px] px-[30px] py-[10px] rounded-tl-[30px] rounded-tr-[30px] rounded-br-[30px] rounded-bl-[30px] bg-[rgba(0,113,188,1)] text-white font-normal text-[16px] leading-[40px] text-center no-underline hover:opacity-80 hover:bg-[rgba(0,90,150,1)] transition-opacity duration-300 whitespace-nowrap">
            Learn More
        </a>
    </div>
<?php endif; ?>
</section>
