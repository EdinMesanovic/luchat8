<?php if (have_rows('slider')): ?>
<section class="py-16 bg-gray-100 overflow-hidden">
    <div class="swiper-container relative">
        <div class="swiper-wrapper">
            <?php while (have_rows('slider')): the_row(); 
                // Dohvati podatke iz repeatera
                $title = get_sub_field('title');
                $description = get_sub_field('subtitle');
            ?>
            <div class="swiper-slide flex flex-col items-center text-center bg-white p-6 rounded-lg shadow-lg">
                <!-- Slika slajda -->
                
                
                <!-- Naslov slajda -->
                <?php if ($title): ?>
                    <h3 class="text-2xl font-bold text-black mb-2"><?php echo esc_html($title); ?></h3>
                <?php endif; ?>

                <!-- Opis slajda -->
                <?php if ($description): ?>
                    <p class="text-lg text-gray-700"><?php echo esc_html($description); ?></p>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        </div>
        
    </div>
</section>
<?php endif; ?>
