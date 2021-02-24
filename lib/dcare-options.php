<?php

if(class_exists('CSF')){

    $prefix = 'dcare_options';

    CSF::createOptions($prefix, array(
        'menu_title' => __('Dcare Options', 'dcare'),
        'menu_slug' => 'dcare-options',
        'framework_title' => 'dcare Options - <small>Masum Billah</small>',
        'menu_parent' => 'themes.php',
        'menu_type' => 'submenu'
    ));
	
  // Header Options
    CSF::createSection($prefix, array(
        'id' => 'header_options',
        'title' => 'Header Options',
        'icon' => 'fas fa-address-card'
    ));

    CSF::createSection($prefix, array(
        'parent' => 'header_options',
        'title' => __('Header Address', 'dcare'),
        'icon' => 'fas fa-arrow-right',
        'fields' => array(
            array(
                'id' => 'header_address',
                'type' => 'text',
                'title' => __('Address', 'dcare')
            ),
            array(
                'id' => 'header_email',
                'type' => 'text',
                'title' => __('Email', 'dcare')
            ),
            array(
                'id' => 'header_phone',
                'type' => 'text',
                'title' => __('Phone Number', 'dcare')
            )
        )

    ));

  // About Options
    CSF::createSection($prefix, array(
        'id' => 'about_feature_options',
        'title' => 'About Features',
        'icon' => 'fas fa-address-card'
    ));

// About Feature Options
    CSF::createSection($prefix, array(
        'parent' => 'about_feature_options',
        'id' => 'about_fe_options',
        'title' => __('About Feature'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'about_fe_lists',
                'title' => __(' Featured Lists'),
                'type' => 'group',
                'button_title' => __('Add New Feature'),
                'fields' => array(
                    array(
                        'id' => 'about_fe_title',
                        'type' => 'text',
                        'title' => __('Feature Title')
                    ),
                    array(
                        'id' => 'about_fe_des',
                        'type' => 'textarea',
                        'title' => __('Feature Description')
                    ),
                    array(
                        'id' => 'about_fe_icon',
                        'type' => 'icon',
                        'title' => __('Featured Icon')
                    )
                )
            )
        )
    ));
	


	
    // CTA Options

    CSF::createSection($prefix, array(
        'id' => 'cta_options',
        'title' => __('CTA Options'),
        'icon' => 'fas fa-bullhorn',
        'fields' => array(
            array(
                'id' => 'cta_switch',
                'type' => 'switcher',
                'title' => __('Show CTA?', 'dcare'),
                'default' => true
            ),
            array(
                'id' => 'cta_title',
                'type'=> 'text',
                'title' => __('CTA Title', 'dcare'),
                'default' => __('best solution for your business', 'dcare'),
                'help' => __('Write CTA Title Here', 'dcare'),
                'dependency' => array('cta_switch', '==', 'true')
            ),
            array(
                'id' => 'cta_subtitle',
                'type'=> 'textarea',
                'title' => __('CTA SubTitle', 'dcare'),
                'default' => __('the can be used on larger scale projectss as well as small scale projectss', 'dcare'),
                'dependency' => array('cta_switch', '==', 'true')
            ),
            array(
                'id' => 'cta_btn_txt',
                'type'=> 'text',
                'title' => __('CTA Button Text', 'dcare'),
                'default' => __('contact us', 'dcare'),
                'dependency' => array('cta_switch', '==', 'true')
            ),
            array(
                'id' => 'cta_btn_url',
                'type'=> 'text',
                'title' => __('CTA Button Url', 'dcare'),
                'default' => 'https://www.google.com',
                'dependency' => array('cta_switch', '==', 'true')
            )
        )
    ));


    // Deparment Featured Options
    CSF::createSection($prefix, array(
        'id' => 'department_options',
        'title' => __('Deparments Section', 'dcare'),
        'icon' => 'fas fa-award',
    ));
	

    // Team Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'department_options',
        'title' => __('Deparment Section Area Title', 'dcare'),
        'fields' => array(
            array(
                'id' => 'deapartment_sec_subtitle',
                'title' => __('Sub Title', 'dcare'),
                'type' => 'text',
                'desc' => __('Write Department Section Subtitle Here', 'dcare')
            ),
            array(
                'id' => 'depart_sec_title',
                'title' => __('Title', 'dcare'),
                'type' => 'text'
            ),
            array(
                'id' => 'department_sec_des',
                'title' => __('Description', 'dcare'),
                'type' => 'textarea'
            ),
			
        )
    ));

	
	// Nurological Feature Options
    CSF::createSection($prefix, array(
        'parent' => 'department_options',
        'id' => 'nuro_options',
        'title' => __('Nurological Department'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'nuro_featured_lists',
                'title' => __('Nurological Featured Lists'),
                'type' => 'group',
                'button_title' => __('Add New Feature'),
                'fields' => array(
                    array(
                        'id' => 'nuro_featured_title',
                        'type' => 'text',
                        'title' => __('Feature Title')
                    ),
                    array(
                        'id' => 'nuro_featured_des',
                        'type' => 'textarea',
                        'title' => __('Feature Description')
                    ),
                    array(
                        'id' => 'nuro_featured_icon',
                        'type' => 'icon',
                        'title' => __('Featured Icon')
                    )
                )
            )
        )
    ));	
	
	// Surgical Feature Options
    CSF::createSection($prefix, array(
		'parent' => 'department_options',
        'id' => 'surgical_options',
        'title' => __('Surgical Department'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'surgical_featured_lists',
                'title' => __('Surgical Featured Lists'),
                'type' => 'group',
                'button_title' => __('Add New Feature'),
                'fields' => array(
                    array(
                        'id' => 'surgical_featured_title',
                        'type' => 'text',
                        'title' => __('Feature Title')
                    ),
                    array(
                        'id' => 'surgical_featured_des',
                        'type' => 'textarea',
                        'title' => __('Feature Description')
                    ),
                    array(
                        'id' => 'surgical_featured_icon',
                        'type' => 'icon',
                        'title' => __('Featured Icon')
                    )
                )
            )
        )
    ));
	
	// Dental  Feature Options
    CSF::createSection($prefix, array(
		'parent' => 'department_options',
        'id' => 'dental_options',
        'title' => __('Dental Department'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'dental_featured_lists',
                'title' => __('Dental Featured Lists'),
                'type' => 'group',
                'button_title' => __('Add New Feature'),
                'fields' => array(
                    array(
                        'id' => 'dental_featured_title',
                        'type' => 'text',
                        'title' => __('Feature Title')
                    ),
                    array(
                        'id' => 'dental_featured_des',
                        'type' => 'textarea',
                        'title' => __('Feature Description')
                    ),
                    array(
                        'id' => 'dental_featured_icon',
                        'type' => 'icon',
                        'title' => __('Featured Icon')
                    )
                )
            )
        )
    ));
	
	// Ophthalmology   Feature Options
    CSF::createSection($prefix, array(
		'parent' => 'department_options',
        'id' => 'oph_options',
        'title' => __('Ophthalmology Department'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'oph_featured_lists',
                'title' => __('Ophthalmology Featured Lists'),
                'type' => 'group',
                'button_title' => __('Add New Feature'),
                'fields' => array(
                    array(
                        'id' => 'oph_featured_title',
                        'type' => 'text',
                        'title' => __('Feature Title')
                    ),
                    array(
                        'id' => 'oph_featured_des',
                        'type' => 'textarea',
                        'title' => __('Feature Description')
                    ),
                    array(
                        'id' => 'oph_featured_icon',
                        'type' => 'icon',
                        'title' => __('Featured Icon')
                    )
                )
            )
        )
    ));
	
	// Cardiology Feature Options
    CSF::createSection($prefix, array(
		'parent' => 'department_options',
        'id' => 'cardiology _options',
        'title' => __('Cardiology  Department'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'cardiology_featured_lists',
                'title' => __('Cardiology  Featured Lists'),
                'type' => 'group',
                'button_title' => __('Add New Feature'),
                'fields' => array(
                    array(
                        'id' => 'cardiology_featured_title',
                        'type' => 'text',
                        'title' => __('Feature Title')
                    ),
                    array(
                        'id' => 'Cardiology_featured_des',
                        'type' => 'textarea',
                        'title' => __('Feature Description')
                    ),
                    array(
                        'id' => 'cardiology_featured_icon',
                        'type' => 'icon',
                        'title' => __('Featured Icon')
                    )
                )
            )
        )
    ));
	
	
	
	
    // Team Options
    CSF::createSection($prefix, array(
        'id' => 'team_options',
        'title' => __('Team Section', 'dcare'),
        'icon' => 'fas fa-award',
    ));

    // Team Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'team_options',
        'title' => __('Team Section Title', 'dcare'),
        'fields' => array(
            array(
                'id' => 'team_sec_subtitle',
                'title' => __('Sub Title', 'dcare'),
                'type' => 'text',
                'desc' => __('Write About Section Subtitle Here', 'dcare')
            ),
            array(
                'id' => 'team_sec_title',
                'title' => __('Title', 'dcare'),
                'type' => 'text'
            ),
            array(
                'id' => 'team_sec_des',
                'title' => __('Description', 'dcare'),
                'type' => 'textarea'
            ),
			
        )
    ));

    // TESTIMONIALS Options
    CSF::createSection($prefix, array(
        'id' => 'testimonials_options',
        'title' => __('Testimonials Section', 'dcare'),
        'icon' => 'fas fa-award',
    ));

    // TESTIMONIALS Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'testimonials_options',
        'title' => __('Testimonials Section Title', 'dcare'),
        'fields' => array(
            array(
                'id' => 'testimonials_sec_subtitle',
                'title' => __('Sub Title', 'dcare'),
                'type' => 'text',
                'desc' => __('Write Testimonials Section Subtitle Here', 'dcare')
            ),
            array(
                'id' => 'testimonials_sec_title',
                'title' => __('Title', 'dcare'),
                'type' => 'text'
            ),
            array(
                'id' => 'testimonials_sec_des',
                'title' => __('Description', 'dcare'),
                'type' => 'textarea'
            ),
			
        )
    ));

    // Pricing Options
    CSF::createSection($prefix, array(
        'id' => 'pricing_options',
        'title' => __('Pricing Section', 'dcare'),
        'icon' => 'fas fa-award',
    ));

    // Pricing Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'pricing_options',
        'title' => __('Pricing Section Title', 'dcare'),
        'fields' => array(
            array(
                'id' => 'pricing_sec_subtitle',
                'title' => __('Sub Title', 'dcare'),
                'type' => 'text',
                'desc' => __('Write Pricing Section Subtitle Here', 'dcare')
            ),
            array(
                'id' => 'pricing_sec_title',
                'title' => __('Title', 'dcare'),
                'type' => 'text'
            ),
            array(
                'id' => 'pricing_sec_des',
                'title' => __('Description', 'dcare'),
                'type' => 'textarea'
            ),
			
        )
    ));


    // Blog Options
    CSF::createSection($prefix, array(
        'id' => 'blog_options',
        'title' => __('Blog Section', 'dcare'),
        'icon' => 'fas fa-award',
    ));

    // Blog Section Title
    CSF::createSection($prefix, array(
        'parent'=> 'blog_options',
        'title' => __('Blog Section Title', 'dcare'),
        'fields' => array(
            array(
                'id' => 'blog_sec_subtitle',
                'title' => __('Sub Title', 'dcare'),
                'type' => 'text',
                'desc' => __('Write Blog Section Subtitle Here', 'dcare')
            ),
            array(
                'id' => 'blog_sec_title',
                'title' => __('Title', 'dcare'),
                'type' => 'text'
            ),
            array(
                'id' => 'blog_sec_des',
                'title' => __('Description', 'dcare'),
                'type' => 'textarea'
            ),
			
        )
    ));


  
    // Counter Options

    CSF::createSection($prefix, array(
        'id' => 'counter_options',
        'title' => __('Counter Options'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'counter_lists',
                'title' => __('Counter Lists'),
                'type' => 'group',
                'button_title' => __('Add New Counter'),
                'fields' => array(
                    array(
                        'id' => 'counter_title',
                        'type' => 'text',
                        'title' => __('Counter Title')
                    ),
                    array(
                        'id' => 'counter_number',
                        'type' => 'number',
                        'title' => __('Counter Number')
                    )
                )
            )
        )
    ));



    // Footer Options
    CSF::createSection($prefix, array(
        'id' => 'footer_options',
        'title' => __('Footer Options', 'dcare'),
        'icon' => 'fas fa-rocket',
        'fields' => array(
            array(
                'id' => 'footer_text',
                'type' => 'text',
                'title' => __('Copyright Text' , 'dcare'),
                'default' => __('&copy; All Rights Reserved 2020' ,'dcare')
            ),
        )
    ));

}