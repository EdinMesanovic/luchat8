<?php get_header(); ?>

<main class="container mx-auto my-10 px-4">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php if (get_post_type() === 'news'): ?>
            
            <article class="prose w-full sm:max-w-[60%]">
                
                <div class="mt-4 mb-6">
                    <?php
                    $categories = get_the_category();
                    if (!empty($categories)): ?>
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($categories as $category): ?>
                                <span class="px-4 py-2 text-[12px] font-normal leading-[16px] text-left font-modern border border-[rgba(13,114,185,1)] rounded-full text-[rgba(13,114,185,1)]">
                                    <?php echo esc_html($category->name); ?>
                                </span>
                                

                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                
                <h1 class="font-bricolageGrotesque text-[38px] sm:text-[80px] font-bold sm:font-semibold leading-[50.54px] sm:leading-[80px] tracking-[-0.02em] sm:tracking-[-0.04em] text-left text-[rgba(51,51,51,1)] text-underline-position-from-font text-decoration-skip-ink-none mb-6">
                    <?php the_title(); ?>
                </h1>
                
                <div class="content-news">
                    <?php echo get_field('content'); ?>
                </div>
            </article>
        <?php endif; ?>

    <?php endwhile; else: ?>
        <p>No post found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
