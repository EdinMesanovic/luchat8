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
            
            elseif (get_row_layout() == 'heading_section'):
                get_template_part('blocks/heading/heading');
    
            // Gallery Section
            elseif (get_row_layout() == 'accordion_section'):
                get_template_part('blocks/accordion/accordion');
    
            // Services Section
            elseif (get_row_layout() == 'services_section'):
                get_template_part('blocks/services');
                
                elseif (get_row_layout() == 'slider_section'):
                    get_template_part('blocks/slider/slider');
    
            endif;
    
        endwhile;
    endif;
    ?>
</main>
<?php
get_footer();
