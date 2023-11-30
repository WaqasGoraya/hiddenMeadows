<?php

if (defined('HIDDEN_MEDOWS_URL')     == false)     define('HIDDEN_MEDOWS_URL', get_template_directory());

if (defined('HIDDEN_MEDOWS_URI')     == false)     define('HIDDEN_MEDOWS_URI', get_template_directory_uri());


// Setup Theme

require(HIDDEN_MEDOWS_URL . '/extends/theme_setup.php');

// Add js, css, live customize

require(HIDDEN_MEDOWS_URL . '/extends/include_assets.php');

// Register Sidebars 

require(HIDDEN_MEDOWS_URL . '/extends/register_sidebars.php');

// woocommerce auth
require(HIDDEN_MEDOWS_URL . '/extends/woocommerce/auth.php');

// Product Meta
require(HIDDEN_MEDOWS_URL . '/extends/woocommerce/product-meta.php');

// Register Custom Posts 
require(HIDDEN_MEDOWS_URL . '/extends/custom-post-types/home_posts.php');

// Ajax 
require(HIDDEN_MEDOWS_URL . '/extends/ajax/ajax.php');

