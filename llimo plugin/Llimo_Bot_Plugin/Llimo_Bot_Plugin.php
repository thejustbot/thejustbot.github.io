<?php
/**
 * Plugin Name: Llimo_Bot Plugin
 * Description: Wordpress Integration for Llimo.de code snippet
 * Author: Llimo.de-Team
 * Version: 1.0.0
 * Text Domain: Llimo_Bot_Plugin
 */

if( !defined('ABSPATH'))
{
    exit;
}

class LlimoBotPlugin{

    public function __construct()
    {

        // create post type
        add_action('init', array($this, 'create_custom_post_type'));

        // add assets
        add_action('wp_enqueue_scripts', array($this, 'load_assets'));

        //add shortcode
        add_shortcode('Llimo.de', array($this, 'load_shortcode'));
    }

    public function create_custom_post_type()
    {
        $args = array(
            'public' => true,
            'has_archive' => true,
            'supports' => array('title'),
            'excludes_from_search' => true,
            'publicly_queryable' => false,
            'capability' => 'manage_options',
            'labels' => array(
                'name' => 'Llimo.de',
                'singular_name' =>  ''
            ),
            'menu_icon' => '' /** put name of wordpress icon here  */
            );
        register_post_type('Llimo_Bot_Plugin', $args);

    }

    public function load_assets()
    {
        wp_enqueue_style(
            'Llimo_Bot_Plugin',
            plugin_dir_url(__FILE__) . 'css/Llimo_Bot_Plugin.css',//$src:string
            //$deps:array,
            1,//$ver:string|boolean|null,
            all//$media:string
        );

        wp_enqueue_script(
            'Llimo_Bot_Plugin',//$handle:string,
            plugin_dir_url(__FILE__) . 'js/Llimo_Bot_Plugin.js',//$src:string,
            //$deps:array,
            1,//$ver:string|boolean|null,
            //$in_footer:boolean
        );
    }

    public function load_shortcode()
    {
        return 'something, something, things are working';
    }
}

new LlimoBotPlugin;