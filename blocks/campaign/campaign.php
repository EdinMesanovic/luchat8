    <section class="campaign__section px-36">
        <?php 
        $image = get_sub_field('image'); // Image (ID)
        $title = get_sub_field('title'); // Title
        $link = get_sub_field('link'); // Link
        ?>

        <div 
            class="relative w-full bg-cover bg-center flex items-center text-left"
            style="background-image: url('<?php echo esc_url(wp_get_attachment_image_url($image, 'full')); ?>'); max-height: 600px; height: 100%">
            <div class="absolute inset-0 bg-black bg-opacity-30"></div> <!-- Optional overlay -->

            <div class="relative z-10 text-white px-6 w-full md:w-1/2 lg:px-20">
                <!-- Title -->
                <?php if ($title): ?>
                    <h2 class="font-bricolageGrotesque text-[48px] md:text-[80px] font-bold leading-[63.84px] md:leading-[80px] tracking-[-0.04em]">
                        <?php echo esc_html($title); ?>
                    </h2>
                <?php endif; ?>

                <!-- Subtext -->
                <p class="text-[24px] lg:text-[32px] font-bold mt-4">7.83 Hz</p>

                <!-- Link -->
                <?php if ($link): ?>
                    <a href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>" 
                        class="mt-6 inline-flex items-center text-white font-medium text-[18px] border border-white rounded-full px-6 py-3 hover:bg-white hover:text-black transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="mr-2">
                            <circle cx="10" cy="10" r="9" stroke="currentColor" stroke-width="2" fill="none"></circle>
                            <path d="M10 6v4h4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Learn more
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </section>
