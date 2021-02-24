<?php

require_once get_template_directory().'/lib/class-tgm-plugin-activation.php';

function dcare_activation(){

    $plugins = array(
        array(
            'name' => __('Advanced Custom Fields', 'agency'),
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => __('Codestar Framework', 'agency'),
            'slug' => 'codestar-framework',
            'source' => 'https://github.com/Codestar/codestar-framework/archive/master.zip',
            'required' => true
        ),
        array(
            'name' => __('Contact Form 7', 'agency'),
            'slug' => 'contact-form-7',
            'required' => true
        )
    );

    $config = array(
        'id' => 'dcare_plugins_activation',
        'menu' => 'dcare-plugins-activation',
        'parent_slug'  => 'themes.php',
        'has_notices'  => true

    );

    tgmpa($plugins, $config);
 
}
add_action('tgmpa_register', 'dcare_activation');