<?php
$gallery_images = get_sub_field('gallery_images');

if ($gallery_images): ?>
    <section class="gallery py-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <?php foreach ($gallery_images as $image): ?>
                    <img class="w-full h-auto rounded" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
