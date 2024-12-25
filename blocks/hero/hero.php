<?php
$hero_title = get_sub_field('hero_title');
$hero_subtitle = get_sub_field('hero_subtitle');
$hero_background = get_sub_field('hero_background');

if ($hero_title || $hero_subtitle || $hero_background): ?>
    <section class="relative bg-cover bg-center h-screen flex items-center justify-center text-center"
         style="background-image: url('<?php echo esc_url($hero_background['url']); ?>');">
    <!-- Tamni overlay -->
    <div class="bg-black bg-opacity-60 w-full h-full absolute inset-0"></div>

    <!-- Sadržaj hero sekcije -->
    <div class="relative z-10 text-white px-6 max-w-4xl mx-auto">
        <?php if ($hero_title): ?>
            <h1 class="animate-fade-in-down text-4xl md:text-6xl font-extrabold mb-4 leading-tight">
            <?php echo esc_html($hero_title); ?>
            </h1>
        <?php endif; ?>

        <?php if ($hero_subtitle): ?>
            <p class="text-lg md:text-2xl font-light mb-6">
                <?php echo esc_html($hero_subtitle); ?>
            </p>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>
