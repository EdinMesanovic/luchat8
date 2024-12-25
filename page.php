<?php
get_header()
?>
<main>
    <?php
    if (have_rows('page_layouts')):
        while (have_rows('page_layouts')): the_row();
    
            // Hero Section
            if (get_row_layout() == 'hero_section'):
                get_template_part('blocks/hero/hero');
    
            // Gallery Section
            elseif (get_row_layout() == 'gallery_section'):
                get_template_part('blocks/gallery');
    
            // Services Section
            elseif (get_row_layout() == 'services_section'):
                get_template_part('blocks/services');
    
            endif;
    
        endwhile;
    endif;
    ?>
</main>
<?php
get_footer();
