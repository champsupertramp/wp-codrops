<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.

/**
 * Framework page settings
 */
$settings = array(
    'header_title' => 'Text Styles and Hover Effects',
    'menu_title'   => 'Text Styles and Hover Effects',
    'menu_type'    => 'add_submenu_page',
    'menu_slug'    => 'wp-codrops-1',
    'ajax_save'    => false,
);


/**
 * sections and fields option
 * @var array
 */
$options        = array();

/*
 *  Styling options tab and fields settings
 */
$options[]      = array(
    'name'        => 'styling',
    'title'       => 'Styling',
    'icon'        => 'fa fa-paint-brush',
    'fields'      => array(
         array(
            'id'      => 'element_id', 
            'type'    => 'text',
            'title'   => 'Element ID/Class',
            'default' => '.site-branding .site-title',
        ),
        array(
            'id'      => 'parent_element_background', 
            'type'    => 'color_picker',
            'title'   => 'Parent Element Background',
        ),
        array(
            'id'      => 'text_color', 
            'type'    => 'color_picker',
            'title'   => 'Text Color',
        ),
        array(
            'id'      => 'hover_effect',
            'type'    => 'select',
            'title'   => 'Effect',
            'options' => array(
                'kukuri'        => 'Kukuri',
                'takiri'        => 'Takiri',
                'surinami'      => 'Surinami',
                'nukun'         => 'Nukun',
                'kumya'         => 'Kumya',
                'manko'         => 'Manko',
                'mallki'        => 'Mallki',
                'ilin'          => 'Ilin',
                'urpi'          => 'Urpi',
                'asiri'         => 'Asiri',
            ),
            'default'    => 'kukuri',
        ),
        array(
            'id'      => 'custom_css', 
            'type'    => 'textarea',
            'title'   => 'Custom CSS',
            'help'    => 'Overrides the default styles',
        ),
      
    ),
);



SkeletFramework::instance( $settings, $options );
