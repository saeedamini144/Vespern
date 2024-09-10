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
                            'desc' => 'write the text here'
                        ),
                        'about_section_item' => array(
                            'label' => __('add text item', '{domain}'),
                            'value' => array(null),
                            'desc' => __('write the text', '{domain}'),
                            'help' => __('add icon too', '{domain}'),
                            'type' => 'addable-option',
                            'option' => array(
                                'type' => 'text',
                            ),
                            'add-button-text' => __('Add input', '{domain}'),
                            'sortable' => true,
                        ),
                    ),
                )
            )
        )
    );
