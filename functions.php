<?php

/// CUSTOM JS FILE LOADER
add_action( 'wp_footer', 'md_child_theme_scripts' ); 
function md_child_theme_scripts()
{
    wp_enqueue_script( 'md_theme_script_handle', get_stylesheet_directory_uri() . '/js/custom.js',array('jquery'));
}

/*
 YOUR FUNCTIONS
*/

#$custompostvals['title'] = "w-rks"; // post name / slug
#$custompostvals['singular'] = "Pr-ject"; // single name
#$custompostvals['plural'] = "W-rks"; // name
#$custompostvals['slug'] = "w-rks"; // slug



?>
