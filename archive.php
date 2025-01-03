<?php get_header(); ?>

<main class="container mx-auto my-10 px-4">
    <?php if (have_posts()): ?>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 w-full sm:max-w-[60%]">
            <?php 
            $count = 0;
            while (have_posts()): the_post(); 
                $count++;
            ?>
                <?php if ($count === 1): ?>
                    
                    <div class="news-item col-span-1 lg:col-span-2 overflow-hidden">
                        <div class="image relative rounded-2xl overflow-hidden">
                            
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/50 z-10"></div>

                            
                            <?php 
                            $image = get_field('image'); 
                            if ($image): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full sm:h-[400px] h-[220px] object-cover">
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="https://via.placeholder.com/364x220?text=No+Image" alt="No Image" class="w-full sm:h-[400px] h-[220px] object-cover">
                                </a>
                            <?php endif; ?>

                            
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)): ?>
                                <span class="absolute px-3 py-2 bottom-3 right-3 text-[12px] font-normal leading-[16px] text-right text-white font-modern border border-white rounded-full z-20">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <!-- Naslov -->
                        <div class="p-4">
                            <h3 class="font-modern sm:font-bricolageGrotesque text-[20px] sm:text-[80px] font-medium sm:font-semibold leading-[24px] sm:leading-[80px] tracking-[-0.02em] sm:tracking-[-0.04em] text-left mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-black hover:underline">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                        </div>
                    </div>
                <?php else: ?>
                    <!-- Ostale vijesti -->
                    <div class="news-item overflow-hidden">
                        <div class="image relative rounded-2xl overflow-hidden">
                            <!-- Linear Gradient -->
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/50 z-10"></div>

                            <!-- Prikaz slike -->
                            <?php 
                            $image = get_field('image'); 
                            if ($image): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full h-[220px] object-cover">
                                </a>
                            <?php else: ?>
                                <a href="<?php the_permalink(); ?>">
                                    <img src="https://via.placeholder.com/364x220?text=No+Image" alt="No Image" class="w-full h-[220px] object-cover">
                                </a>
                            <?php endif; ?>

                            <!-- Kategorija -->
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)): ?>
                                <span class="absolute px-3 py-2 bottom-3 right-3 text-[12px] font-normal leading-[16px] text-right text-white font-modern border border-white rounded-full z-20">
                                    <?php echo esc_html($categories[0]->name); ?>
                                </span>
                            <?php endif; ?>
                        </div>

                        <!-- Naslov -->
                        <div class="p-4 flex justify-between">
                            <h3 class="font-modern text-[20px] font-medium leading-[24px] tracking-[-0.02em] text-left mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-black hover:underline">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <!-- SVG Ikonica -->
                            <div class="ml-2">
                                <a href="<?php the_permalink(); ?>" class="flex items-center text-blue-500 hover:text-blue-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#0071BC"/>
                                        <path d="M9 19L19 9M19 9L9.4 9M19 9L19 18.6" stroke="#0071BC" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>

        
        <div class="pagination mt-10">
            <?php 
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('« Previous', 'textdomain'),
                'next_text' => __('Next »', 'textdomain'),
            ));
            ?>
        </div>
    <?php else: ?>
        <p class="text-center text-gray-500">No news available.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
