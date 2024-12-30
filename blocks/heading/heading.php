<?php
$title = get_sub_field('title'); // Dinamički naslov iz ACF-a
$subtitle = get_sub_field('subtitle'); // Dinamički podnaslov iz ACF-a
?>

<section class="py-16 text-center">
    <!-- Naslov -->
    <?php if ($title): ?>
        <h2 class="bg-custom-gradient inline-block text-transparent bg-clip-text text-[32px] sm:text-[48px] md:text-[48px] lg:text-[48px] font-bold leading-[1.2] tracking-[-0.02em] font-bricolageGrotesque mb-5">
            <?php echo esc_html($title); ?>
        </h2>
    <?php endif; ?>

    <!-- Podnaslov -->
    <?php if ($subtitle): ?>
        <p class="font-modern text-[18px] font-normal text-center leading-[22px] sm:leading-[23.94px] tracking-[-0.02em] text-[rgba(112,112,112,1)] bg-transparent mt-0 mb-[10px]">
            <?php echo esc_html($subtitle); ?>
        </p>
    <?php endif; ?>
</section>