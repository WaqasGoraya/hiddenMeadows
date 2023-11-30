<?php

/**
 * HiddenMeadows's functions and definitions
 *
 * @package HiddenMeadows
 * @since HiddenMeadows 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
// if (!isset($content_width)) {
//     $content_width = 800; /* pixels */
// }


if (!function_exists('hiddenMeadows_setup')) :

    /**
     * Sets up theme defaults and registers support for various
     * WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme
     * hook, which runs before the init hook. The init hook is too late
     * for some features, such as indicating support post thumbnails.
     */
    function hiddenMeadows_setup()
    {

        /**
         * Make theme available for translation.
         * Translations can be placed in the /languages/ directory.
         */
        load_theme_textdomain('hiddenMeadows', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to

         */
        add_theme_support('automatic-feed-links');

        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support('post-thumbnails');

        /*
         * Enable support for the document title.
         */
        add_theme_support('title-tag');
        /**
         * Add support for two custom navigation menus.
         */
        register_nav_menus(array(
            'home_menu' => __('Home Menu', 'hiddenMeadows'),
            'footer_menu' => __('Footer Menu', 'hiddenMeadows'),
        ));

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

        //custom header

        $args = array(

            'default-image'      => get_template_directory_uri() . '/assets/images/white-logo.png',

            'default-text-color' => '000',

            'width'              => 1000,

            'height'             => 250,

            'flex-width'         => true,

            'flex-height'        => true,

        );

        add_theme_support('custom-header', $args);
    }
endif; // hiddenMeadows_setup
add_action('after_setup_theme', 'hiddenMeadows_setup');
