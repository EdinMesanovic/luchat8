<?php if (have_rows('partners')): ?>
    <section class="section__partners py-10 my-10 mx-[12px] md:mx-20 lg:mx-40">
        <div class="container mx-auto max-w-full">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php while (have_rows('partners')): the_row(); 
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $url = get_sub_field('url');
                ?>
                    <div class="bg-white rounded-3xl shadow-md p-6 text-left">
                        <?php if (!empty($title)): ?>
                            <h3 class="font-bricolageGrotesque text-[28px] sm:text-[28px] font-bold sm:font-medium leading-[36px] sm:leading-[37.24px] tracking-[-0.02em] text-left mb-4 text-black text-underline-position-from-font text-decoration-skip-ink-none">
                                <?php echo esc_html($title); ?>
                            </h3>
                        <?php endif; ?>

                        <?php if (!empty($description)): ?>
                            <p class="font-modern text-[12px] font-normal leading-[15.96px] tracking-[-0.02em] text-left text-gray-600 text-underline-position-from-font text-decoration-skip-ink-none mb-4">
                                <?php echo esc_html($description); ?>
                            </p>
                        <?php endif; ?>

                        <?php if (!empty($url)): ?>
                            <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center justify-start text-[rgba(0,113,188,1)] text-[16px] font-normal leading-[21.28px] tracking-[-0.02em] text-left text-underline-position-from-font text-decoration-skip-ink-none hover:text-blue-700">
                                Visit website
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28" fill="none" class="ml-6">
                                    <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="#0071BC"/>
                                    <path d="M9 19L19 9M19 9L9.4 9M19 9L19 18.6" stroke="#0071BC" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="bevel"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php else: ?>
    <p class="text-center text-gray-500">No partners available.</p>
<?php endif; ?>
