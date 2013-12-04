<?php function jqueryScripts(){
    
    wp_register_script("image-slider", get_bloginfo('template_directory').'/js/image-slider.js', false);
    wp_enqueue_script("image-slider");
}
add_action('wp_print_scripts','jqueryScripts'); ?>