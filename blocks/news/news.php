<?php
$args = array(
    'post_type'      => 'news', 
    'posts_per_page' => 3,     
    'orderby'        => 'date',
    'order'          => 'DESC', 
);

$news_query = new WP_Query($args);

if ($news_query->have_posts()): ?>
    <section class="section__news my-10 mx-[12px] md:mx-20 lg:mx-40">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                <div class="news-item overflow-hidden">
                <div class="image relative rounded-2xl overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/50 z-10"></div>

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

                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)): ?>
                        <span class="absolute px-3 py-2 bottom-3 right-3 text-[12px] font-normal leading-[16px] text-right text-white font-modern border border-white rounded-full z-20">
                            <?php echo esc_html($categories[0]->name); ?>
                        </span>
                    <?php endif; ?>
                </div>

                <div class="p-4 flex justify-between">
                    <h3 class="font-modern text-[20px] font-medium leading-[24px] tracking-[-0.02em] text-left mb-2">
                        <a href="<?php the_permalink(); ?>" class="text-black hover:underline">
                            <?php the_title(); ?>
                        </a>
                    </h3>

                    <div class='ml-2'>
                        <a href="<?php the_permalink(); ?>" class="flex items-center text-blue-500 hover:text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#0071BC"/>
                                <path d="M9 19L19 9M19 9L9.4 9M19 9L19 18.6" stroke="#0071BC" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="flex justify-center mt-10 md:mt-20">
        <a href="/all-news" 
   class="flex items-center justify-center px-[30px] py-[10px] h-[60px] bg-[rgba(0,113,188,1)] text-white text-[16px] leading-[19.2px] tracking-[-0.04em] text-center rounded-full shadow-md hover:bg-[rgba(0,90,150,1)] transition duration-300 font-normal" 
   style="font-weight: 400;">
    View all
</a>

        </div>

    </section>
<?php else: ?>
    <p class="text-center text-gray-500">No news available.</p>
<?php endif;

// Reset WP Query
wp_reset_postdata();
?>
