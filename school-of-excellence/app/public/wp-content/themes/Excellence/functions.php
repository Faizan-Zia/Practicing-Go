<?php

function load_files(){
    wp_enqueue_style('school_stylesheet', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts','load_files');