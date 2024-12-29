<?php
$title = get_sub_field('title'); // Dinamički naslov iz ACF-a
$subtitle = get_sub_field('subtitle'); // Dinamički podnaslov iz ACF-a
?>

<section class="py-16 text-center">
    <!-- Naslov -->
    <?php if ($title): ?>
        <h2 class="bg-gradient-to-r from-cyan-500 to-blue-500 inline-block text-transparent bg-clip-text text-[42px] sm:text-[48px] md:text-[56px] lg:text-[64px] font-bold leading-[1.2] tracking-[-0.02em] font-bricolageGrotesque">
            <?php echo esc_html($title); ?>
        </h2>
    <?php endif; ?>

    <!-- Podnaslov -->
    <?php if ($subtitle): ?>
        <p class="text-[20px] leading-[1.3] text-black/80 mt-0 mb-[10px]">
            <?php echo esc_html($subtitle); ?>
        </p>
    <?php endif; ?>
</section>