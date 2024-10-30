<?php
if (! class_exists('Redux')) {
    return;
}

$opt_name = 'mediplus_opt';

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    'display_name'         => $theme->get('Name'),
    'display_version'      => $theme->get('Version'),
    'menu_title'           => esc_html__('Theme Options', 'mediplus'),
    'admin_bar_priority'   => 30,
    'dev_mode'             => false,
    'customizer'           => true,
);

Redux::set_args($opt_name, $args);

Redux::set_section(
    $opt_name,
    array(
        'title'  => esc_html__('Top Header Area', 'mediplus'),
        'id'     => 'basic',
        'desc'   => esc_html__('Basic field with no subsections.', 'your-textdomain-here'),
        'icon'   => 'el el-home',
        'fields' => array(
            array(
                'id'       => 'opt-text',
                'type'     => 'text',
                'title'    => esc_html__('Example Text', 'your-textdomain-here'),
                'desc'     => esc_html__('Example description.', 'your-textdomain-here'),
                'subtitle' => esc_html__('Example subtitle.', 'your-textdomain-here'),
            )
        )
    )
);
