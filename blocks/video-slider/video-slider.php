<?php if (have_rows('slider')): ?>
    <section class="section__ambassadors py-10 my-10 mx-[12px] md:mx-20 lg:mx-40">
        <div class="slider grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_rows('slider')): the_row(); 
                $video_thumbnail = get_sub_field('video_thumbnail'); // Thumbnail image
                $youtube_url = get_sub_field('video_url'); // YouTube URL
                $title = get_sub_field('title'); // Title
                $description = get_sub_field('description'); // Description
            ?>

                <div class="ambassador-item bg-white rounded-2xl shadow-md p-4 relative">
                    <!-- Thumbnail -->
                    <?php if ($video_thumbnail && $youtube_url): ?>
                        <div 
                            class="video-thumbnail relative cursor-pointer" 
                            data-youtube-url="<?php echo esc_url($youtube_url); ?>"
                            onclick="openYouTubeModal(this.getAttribute('data-youtube-url'))">
                            <img 
                                src="<?php echo esc_url($video_thumbnail['url']); ?>" 
                                alt="<?php echo esc_attr($video_thumbnail['alt']); ?>" 
                                class="rounded-2xl w-full h-[220px] object-cover">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="#fff" class="bg-blue-600 rounded-full p-3">
                                    <path d="M6 4l20 12-20 12z"></path>
                                </svg>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Title -->
                    <?php if ($title): ?>
                        <h3 class="font-bricolageGrotesque text-[24px] font-bold leading-[31.92px] tracking-[-0.02em] text-left mt-4 text-black">
                            <?php echo esc_html($title); ?>
                        </h3>
                    <?php endif; ?>

                    <!-- Description -->
                    <?php if ($description): ?>
                        <p class="font-modern text-[16px] font-normal leading-[21.28px] tracking-[-0.02em] text-left text-gray-600 mt-2">
                            <?php echo esc_html($description); ?>
                        </p>
                    <?php endif; ?>
                </div>

            <?php endwhile; ?>
        </div>
    </section>

    <!-- Modal -->
    <div id="youtube-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
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
