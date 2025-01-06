<?php if (have_rows('slider')): ?>
    <section class="section__ambassadors">
        <div class="swiper-container ambassadors-swiper-container overflow-hidden">
            <div class="swiper-wrapper">
                <?php while (have_rows('slider')): the_row(); 
                    $video_thumbnail_id = get_sub_field('video_thumbnail'); // Get the thumbnail ID
                    $video_thumbnail_url = $video_thumbnail_id ? wp_get_attachment_image_url($video_thumbnail_id, 'full') : ''; // Convert ID to URL
                    $youtube_url = get_sub_field('video_url'); // YouTube URL
                    $sick = get_sub_field('sick');
                    $title = get_sub_field('title'); // Title
                    $description = get_sub_field('description'); // Description
                ?>

                <div class="swiper-slide text-left rounded-2xl text-primary overflow-hidden w-full h-auto sm:w-[400px] sm:h-[250px] md:w-[500px] md:max-h-[300px] lg:w-[600px] lg:max-h-[300px]">
                    <div class="ambassador-item bg-white rounded-2xl relative w-full h-full max-h-[300px]">
                        <!-- Thumbnail -->
                        <?php if ($video_thumbnail_url && $youtube_url): ?>
                            <div 
    class="video-thumbnail relative cursor-pointer h-full max-h-[300px]" 
    data-youtube-url="<?php echo esc_url(get_youtube_embed_url($youtube_url)); ?>"
    onclick="openYouTubeModal(this.getAttribute('data-youtube-url'))">
    
    <!-- Image -->
    <img 
        src="<?php echo esc_url($video_thumbnail_url); ?>" 
        alt="Video Thumbnail"
        class="rounded-2xl w-full h-full max-h-[300px] object-cover overflow-hidden">
    
    <!-- Gradient Overlay -->
    <div 
        class="absolute inset-0 bg-gradient-to-b from-transparent via-[rgba(0,0,0,0.40)] to-[rgba(0,0,0,0.40)]">
    </div>a

    <!-- Play Button -->
    <div class="absolute inset-0 flex items-center justify-center">
        <svg 
            xmlns="http://www.w3.org/2000/svg" 
            width="56" 
            height="56" 
            class="fill-blue-600 bg-white rounded-full p-3 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <path d="M6 4l20 12-20 12z"></path>
        </svg>
    </div>
</div>
                        <?php endif; ?>

                        <!-- Title -->
                        <?php if ($title): ?>
                            <h3 class="absolute bottom-10 left-6 text-[16px] font-medium leading-[24px] text-left mt-4 text-white font-modern text-underline-position-from-font text-decoration-skip-ink-none">
                                <?php echo esc_html($title); ?>
                            </h3>
                        <?php endif; ?>

                        <!-- Description -->
                        <?php if ($description): ?>
                            <p class="font-modern opacity-80 absolute bottom-6 left-6 text-[12px] font-medium leading-[16px] text-left text-white text-underline-position-from-font text-decoration-skip-ink-none">
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php endif; ?>

                        <?php if ($sick): ?>
                            <p class="font-modern absolute bottom-6 right-5 text-[12px] font-medium leading-[16px] text-left text-white text-underline-position-from-font text-decoration-skip-ink-none border border-white rounded-full px-3 py-1">
                                <?php echo esc_html($sick); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <?php endwhile; ?>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div id="youtube-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg overflow-hidden shadow-lg relative">
            <button 
                class="absolute top-2 right-2 text-white bg-red-600 rounded-full w-8 h-8 flex items-center justify-center"
                onclick="closeYouTubeModal()">✕</button>
            <iframe 
                id="youtube-iframe" 
                class="w-[80vw] h-[45vw] md:w-[60vw] md:h-[34vw] lg:w-[40vw] lg:h-[22vw]" 
                src="" 
                frameborder="0" 
                allow="autoplay; encrypted-media" 
                allowfullscreen></iframe>
        </div>
    </div>
<?php endif; ?>
