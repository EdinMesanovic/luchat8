<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
?>

<section class="section__heading py-16 text-center">
    <?php if ($title): ?>
        <h2 class="bg-custom-gradient inline-block text-transparent bg-clip-text text-[32px] sm:text-[48px] font-bold leading-[1.2] tracking-[-0.02em] font-bricolageGrotesque mb-5">
            <?php echo esc_html($title); ?>
        </h2>
    <?php endif; ?>

    <?php if ($subtitle): ?>
        <p class="font-modern text-[18px] font-normal text-center px-10 leading-[22px] sm:leading-[24px] tracking-[-0.02em] sm:text-[rgba(112,112,112,1)] text-[rgba(68,81,90,0.7)] mt-0 mb-[10px] sm:px-4" aria-label="<?php echo esc_html($subtitle); ?>">
            <?php echo esc_html($subtitle); ?>
        </p>
    <?php endif; ?>
</section>
