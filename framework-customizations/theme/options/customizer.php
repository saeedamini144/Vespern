 <?php
    $options = array(
        'panel_1' => array(
            'title' => __('Home edit', '{domain}'),
            'options' => array(
                'first_section' => array(
                    'title' => __('First section', '{domain}'),
                    'options' => array(
                        'first_section_title' => array(
                            'label' => 'Change The main title',
                            'type' => 'text',
                            'value' => 'We Help you to improve your business',
                            'desc' => 'Write your header title here'
                        ),
                        'first_section_text' => array(
                            'label' => 'Change The text under the title',
                            'type' => 'wp-editor',
                            'value' => 'We Help you to improve your business',
                            'desc' => 'Write your text here'
                        ),
                        'first_section_button' => array(
                            'label' => 'Button name',
                            'type' => 'text',
                            'value' => 'Call us',
                            'desc' => 'Change the button name'
                        ),
                        'first_section_button_link' => array(
                            'label' => 'Button Link',
                            'type' => 'text',
                            'value' => '#',
                            'desc' => 'Change the button link'
                        ),
                        'first_section_image' => array(
                            'type' => 'upload',
                            'value' => array(),
                            'label' => 'Upload your image',
                            'desc' => 'Upload the banner of the main page',
                            'help' => __('Upload the image for the first section. Best size: 578x430', '{domain}'),
                            'images_only' => true
                        ),
                        'client_logo' => array(
                            'type' => 'addable-option',
                            'value' => array(null),
                            'label' => __('Add the client logo', '{domain}'),
                            'desc' => __('Add image size 150x150', '{domain}'),
                            'help' => __('PNG transparent 150x150px', '{domain}'),
                            'option' => array(
                                'type' => 'upload',
                                'images_only' => true
                            ),
                            'add-button-text' => __('Add image', '{domain}'),
                            'sortable' => true
                        )
                    )
                ),
                // حذف تعریف اضافی options
                'aboutus_section' => array(
                    'title' => __('About Us Section', '{domain}'),
                    'options' => array(

                        'aboutus_section_title' => array(
                            'label' => 'Change The main title',
                            'type' => 'text',
                            'value' => 'About Us',
                            'desc' => 'You can change the section title'
                        ),

                        'about_section_right_text' => array(
                            'label' => 'Chenge the text of the right text',
                            'type' => 'wp-editor',
                            'value' => '',
                            'desc' => 'Write your text here',
                        ),

                        'about_section_button' => array(
                            'label' => 'Change button text',
                            'type' => 'text',
                            'value' => 'Leran More',
                            'desc' => 'You can change button name'
                        ),

                        'about_section_button_link' => array(
                            'label' => 'Change button link',
                            'type' => 'text',
                            'value' => '#',
                            'desc' => 'You can change button link'
                        ),

                        'about_section_left_text' => array(
                            'label' => 'change the text of the left text',
                            'type' => 'wp-editor',
                            'value' => '',
                            'desc' => 'write the text here',
                        ),

                        // 'about_section_item' => array(
                        //     'label' => __('add text item', '{domain}'),
                        //     'value' => array('default_value'),
                        //     'desc' => __('write the text', '{domain}'),
                        //     'help' => __('add icon too', '{domain}'),
                        //     'type' => 'addable-option',
                        //     'option' => array(
                        //         'type' => 'text',
                        //     ),
                        //     'add-button-text' => __('Add input', '{domain}'),
                        //     'sortable' => true,
                        // ),

                        'about_section_item' => array(
                            // 'attr'  => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => __('add item ', '{domain}'),
                            'desc'  => __('add icon and text', '{domain}'),
                            'help'  => __('use boxicons, remixicon, bootstrap-icons', '{domain}'),
                            'type'  => 'addable-box',
                            'box-options' => array(
                                'icon' => array(
                                    'type' => 'text',
                                    'label' => __('icon name', '{domain}'),
                                ),
                                'text_item' => array(
                                    'type' => 'textarea',
                                    'label' => __('item text', '{domain}'),
                                ),
                            ),
                            'value' => array(
                                array(
                                    'icon' => null,
                                    'text_item' => null,
                                ),
                                // ...
                            ),
                            'template' => 'Add  the item with icon ', // box title
                            'box-controls' => array( // buttons next to (x) remove box button
                                // 'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                            ),
                            'limit' => 0, // limit the number of boxes that can be added
                            'add-button-text' => __('Add item', '{domain}'),
                            'sortable' => true,

                        ),

                        'about_section_banner' => array(
                            'label' => __('add the about us sections banner', '{domain}'),
                            'value' => array('value'),
                            'type' => 'upload',
                            'desc' => __('use the pic', '{domain}'),
                            'help' => __('better use the transparnent image size 500*500', '{domain}'),
                            'images_only' => true,
                        ),

                        'about_secton_counter' => array(
                            'label' => __('add counter card content'),
                            'desc' => __('add logo number counter and desc', '{domain}'),
                            'help' => __('use remixicon, boxicon, bootstrap icon', '{domain}'),
                            'type' => 'addable-box',
                            'box-options' => array(
                                'counter_icon' => array(
                                    'type' => 'text',
                                    'title' => __('add the icon', '{domain}'),
                                    'label' => __('write counter icon', '{domain}')
                                ),
                                'counter_number' => array(
                                    'type' => 'text',
                                    'title' => __('add the number', '{domain}'),
                                    'label' => __('write counter number', '{domain}')
                                ),
                                'counter_title' => array(
                                    'type' => 'text',
                                    'title' => __('add the title', '{domain}'),
                                    'label' => __('write counter title', '{domain}')
                                ),
                                'counter_desc' => array(
                                    'type' => 'wp-editor',
                                    'title' => __('add the desc', '{domain}'),
                                    'label' => __('write counter desc', '{domain}')
                                ),
                            ),
                            'value' => array(
                                'counter_icon' => null,
                                'counter_number' => null,
                                'counter_title' => null,
                                'counter_desc' => null,
                            ),
                            'template' => 'add tab icon',
                            'box-controls' => array( // buttons next to (x) remove box button
                                // 'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                            ),
                            'limit' => 0, // limit the number of boxes that can be added
                            'add-button-text' => __('Add counter', '{domain}'),
                            'sortable' => true,
                        ),
                    ),
                ),
                'services_section' => array(
                    'title' => __('Services Section', '{domain}'),
                    'options' => array(

                        'services_section_title' => array(
                            'label' => __('services title', '{domain}'),
                            'type' => 'text',
                            'value' => __('services', '{domain}'),
                            'desc' => __('add the services section title', '{doamin}'),
                        ),

                        'services_section_text' => array(
                            'labele' => __('services text', '{domain}'),
                            'type' => 'wp-editor',
                            'value' => null,
                            'desc' => __('you can add your description of the services', '{domain}')
                        ),

                        'services_section_card' => array(
                            'label' => __('services card content', '{domain}'),
                            'desc' => __('you must add icon title content', '{domain}'),
                            'help' => __('use remixicon bootstrapicon fo the card services', '{domain}'),
                            'type' => 'addable-box',
                            'box-options' => array(
                                'services_icon' => array(
                                    'title' => __('write your icon name', '{domain}'),
                                    'type' => 'text',
                                    'value' => 'default-icon', // مقدار پیش‌فرض
                                ),
                                'services_title' => array(
                                    'title' => __('write the card title', '{domain}'),
                                    'type' => 'text',
                                    'value' => 'default title', // مقدار پیش‌فرض
                                ),
                                'services_card_desc' => array(
                                    'title' => __('write the desc card services', '{domain}'),
                                    'type' => 'wp-editor',
                                    'value' => 'default description', // مقدار پیش‌فرض
                                ),
                            ),
                            'attr' => array(),
                            'template' => 'card services {{- services_title }}', // box title
                            // 'box-controls' => array( // buttons next to (x) remove box button
                            //     'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                            // ),
                            'limit' => 0, // limit the number of boxes that can be added
                            'add-button-text' => __('Add card content', '{domain}'),
                            'sortable' => true,
                        ),
                    ),
                ),
            )
        )
    );
