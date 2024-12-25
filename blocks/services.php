<?php
$service_title = get_sub_field('service_title');
$service_description = get_sub_field('service_description');

if ($service_title || $service_description): ?>
    <section class="services py-10 text-center">
        <div class="container mx-auto">
            <?php if ($service_title): ?>
                <h2 class="text-2xl md:text-4xl font-bold mb-4"><?php echo esc_html($service_title); ?></h2>
            <?php endif; ?>
            <?php if ($service_description): ?>
                <p class="text-lg"><?php echo esc_html($service_description); ?></p>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
