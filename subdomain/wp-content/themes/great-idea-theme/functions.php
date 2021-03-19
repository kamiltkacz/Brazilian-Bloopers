<?php

function carregaStylesheets() {

    wp_register_style('stylesheet', get_template_directory_uri() . 'subdomain/wp-content/themes/great-idea-theme/css/bootstrap.min.css', array(), false, 'all' );

    wp_enqueue_style('stylesheet');


}
add_action('wp_enqueue_scripts', 'carregaStylesheets()');