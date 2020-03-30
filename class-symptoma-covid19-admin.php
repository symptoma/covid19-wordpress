<?php
/**
 * Plugin Name: Symptoma Covid19 Chatbot
 * Plugin URI: https://github.com/symptoma/covid19-wordpress
 * Description: This plugin integrates the symptoma chatbot to check covid19 symptoms on a global basis
 * Version: v.0.1, 2020-03-30
 * Author: Helmuth Lammer, Thoms Lutz
 * Author URI: https://symptoma.com
 * License: GNU GENERAL PUBLIC LICENSE Version 2, June 1991
 */

add_action( 'admin_menu', 'symptoma_covid19_init' );
add_action( 'admin_init', 'symptoma_covid19_register_settings' );
add_action('wp_head','hook_header');

define("SYMPTOMA_COVID19_SLUG", 'symptoma-covid19');

function symptoma_covid19_init(){

    $iconPath = plugin_dir_url(__FILE__) . "img/logo.png";
    add_menu_page( 'Covid19', 'Covid19', 'manage_options', SYMPTOMA_COVID19_SLUG.'-item', 'symptoma_covid19_backend', $iconPath);

}

function symptoma_covid19_backend(){

    $itemSlug = SYMPTOMA_COVID19_SLUG."-item";
    include "views/settings-view.php";
}

function symptoma_covid19_register_settings() {

    $itemSlug = SYMPTOMA_COVID19_SLUG."-item";

    register_setting( $itemSlug, 'elevation' , ["type" =>'integer', "default" => 1000]);
    register_setting( $itemSlug, 'introtext' , ["type" =>'string', "default" => "Hallo, hier schreibt Symptoma, Partner vom Magazin Seltene Krankheiten."]);
    register_setting( $itemSlug, 'height' , ["type" =>'integer', "default" => 600]);
    register_setting( $itemSlug, 'width' , ["type" =>'integer', "default" => 450]);
}

function hook_header() {

    $width =  esc_attr( get_option('width') );
    $height =  esc_attr( get_option('height') );
    $elevation =  esc_attr( get_option('elevation') );
    $introtext =  esc_attr( get_option('introtext') );

    include "views/header-hook-view.php";

}
