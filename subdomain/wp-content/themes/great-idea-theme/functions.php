<?php

function carrega_stylesheets() {




wp_register_style('stylesheet', get_template_directory_uri() . "/css/boootstrap/min.css", array(), false, 'all');

wp_enqueue_style('stylesheet');

wp_register_style('mystyle', get_template_directory_uri() . "/style.css", array(), false, 'all');

wp_enqueue_style('mystyle');




}
add_action('wp_enqueue_scripts', 'carrega_stylesheets');

function incluir_jquery() {


wp_deregister_script('jquery');

wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', '', 1, true);

add_action('wp_enqueue_scripts', 'jquery');

}

add_action('wp_enqueue_scripts', 'incluir_jquery');





function carrega_js() {


wp_register_script('myscripts', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
wp_enqueue_script('myscripts');


}
add_action('wp_enqueue_scripts', 'carrega_js');

// Adicionar Menus

add_theme_support('menus');

// Colocar Menus em cima

register_nav_menus(

    array(

        'top-menu'  => __('Top Menu', 'theme'),

        'footer-menu' => __('Footer Menu', 'theme')


    )

);




