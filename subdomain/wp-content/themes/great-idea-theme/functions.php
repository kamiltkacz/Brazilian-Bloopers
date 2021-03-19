   <?php


function carrega_stylesheets() {

    wp_register_style('stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );

    wp_enqueue_style('stylesheet');


}
add_action('wp_enqueue_scripts', 'carrega_stylesheets()');
add_filter( 'wpseo_remove_reply_to_com', '__return_false' );