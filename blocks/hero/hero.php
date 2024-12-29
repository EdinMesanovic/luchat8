<?php
// Preuzimanje ACF polja za naslov i video fajl
$hero_title = get_sub_field('hero_title'); // Dinamički naslov
$hero_video_file = get_sub_field('hero_video_file'); // URL video fajla (mp4)
?>

<section class="relative w-screen h-screen flex items-center justify-center text-center">
    <!-- Video pozadina -->
    <?php if ($hero_video_file): ?>
        <div class="absolute inset-0 w-full h-full">
            <video class="object-cover w-full h-full" autoplay loop muted playsinline>
                <source src="<?php echo esc_url($hero_video_file); ?>" type="video/mp4">
                <!-- Fallback poruka za nepodržane browser-e -->
                Your browser does not support the video tag.
            </video>
        </div>
    <?php endif; ?>

    <!-- Naslov -->
    <?php if ($hero_title): ?>
    <div class="absolute sm:top-[15%] top-auto bottom-[10%] sm:bottom-auto left-1/2 transform -translate-x-1/2 z-10 text-center">
        <h1 class="text-[36px] sm:text-[48px] md:text-[60px] lg:text-[72px] font-bricolageGrotesque font-bold leading-[1.2] tracking-[-0.02em] text-white decoration-skip-ink max-w-full whitespace-nowrap mx-auto">
            <?php echo esc_html($hero_title); ?>
        </h1>
    </div>
<?php endif; ?>







</section>
