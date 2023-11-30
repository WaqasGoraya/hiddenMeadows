<?php
//Footer Widegts 

if (!function_exists('ID_Solution_register_footer_sidebars')) {
    add_action('widgets_init', 'ID_Solution_register_footer_sidebars');
    function ID_Solution_register_footer_sidebars()
    {
        register_sidebars(5, array(
            'name'          => 'Footer Widget %d',
            'id'            => 'footer-widget',
            'description'   => 'Widgets in this area will be displayed in the bottom of footer',
            'before_widget' => '<div class="widget">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}
//Header Widegts 

if (!function_exists('ID_Solution_register_header_sidebars')) {
    add_action('widgets_init', 'ID_Solution_register_header_sidebars');
    function ID_Solution_register_header_sidebars()
    {
        register_sidebars(3,array(
            'name'          => 'Top Bar %d',
            'id'            => 'header-top',
            'description'   => 'Widgets in this area will be displayed in the top bar of header.',
            'before_widget' => '<div class="widget d-flex">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ));
    }
}
