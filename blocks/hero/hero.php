<?php
$hero_heading = get_field('hero_headign');
$hero_video = get_field('hero_video');
$hero_placeholder = get_field('hero_placeholder');
$hero_mobile_video = get_field('hero_mobile_video');
$hero_mobile_placeholder = get_field('hero_mobile_placeholder');

$video_url = $hero_video ? esc_url($hero_video['url']) : '';
$mobile_video_url = $hero_mobile_video ? esc_url($hero_mobile_video['url']) : '';
?>

<section class="section_hero h-screen pt-0 relative">
    <div class="hero-heading-wrapper flex justify-center pt-[8rem]">
        <h1 class="hero-heading text-white my-0 text-[4.5rem] font-bold leading-none font-bricolageGrotesque">
            <?php echo esc_html($hero_heading); ?>
        </h1>
    </div>
    <div class="hero-video-desktop absolute justify-center hidden w-full h-full inset-0 sm:flex">
        <div class="background-video-desktop w-embed -z-10 aspect-video object-cover w-full h-full absolute inset-0">
            <video class="background-video-desktop -z-10 aspect-video object-cover w-full h-full absolute inset-0" autoplay loop muted playsinline>
                <source src="<?php echo $video_url; ?>" type="video/mp4">
            </video>
        </div>
        <?php
        if ($hero_placeholder) {
            echo wp_get_attachment_image(
                $hero_placeholder,
                'full',
                false,
                array(
                    'loading' => 'eager',
                    'sizes'   => '100vw',
                    'class'   => 'background-video-desktop is-placeholder-image -z-20 aspect-video object-cover w-full h-full absolute inset-0',
                    'alt'     => get_post_meta($hero_placeholder, '_wp_attachment_image_alt', true)
                )
            );
        }
        ?>
    </div>
    <div class="hero-video-mobile -z-10 flex justify-center items-start absolute inset-0 overflow-hidden sm:hidden">
        <div class="background-video-mobile w-embed object-cover w-full h-full">
            <video class="background-video-mobile object-cover w-full h-full" autoplay loop muted playsinline>
                <source src="<?php echo $mobile_video_url; ?>" type="video/mp4">
            </video>
        </div>
        <?php
        if ($hero_mobile_placeholder) {
            echo wp_get_attachment_image(
                $hero_mobile_placeholder,
                'full',
                false,
                array(
                    'loading' => 'eager',
                    'sizes'   => '100vw',
                    'class'   => 'background-video-mobile is-placeholder-image -z-20 absolute object-cover w-full h-full',
                    'alt'     => get_post_meta($hero_mobile_placeholder, '_wp_attachment_image_alt', true)
                )
            );
        }
        ?>
    </div>
</section>