 <?php

    use function PHPSTORM_META\type;

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

                'featur_section' => array(
                    'title' => __('Featur Section', '{domain}'),
                    'options' => array(
                        'featur_section_title' => array(
                            'label' => __('add the featur sections title', '{domain}'),
                            'type' => 'text',
                            'value' => 'Features',
                            'desc' => __('add the feature secction title', '{domain}')
                        ),

                        'featur_section-desc' => array(
                            'label' => __('add the featur sections desc', '{domain}'),
                            'type' => 'wp-editor',
                            'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem',
                            'desc' => __('add the feature secction desc', '{domain}')
                        ),

                        'featur_section_icon' => array(
                            'label' => __('add the icon with the description', '{domain}'),
                            'desc' => __('add the title and the icon', '{domain}'),
                            'help' => __('use https://remixicon.com/', '{domain}'),
                            'type' => 'addable-box',
                            'box-options' => array(
                                'featur_icon' => array(
                                    'label' => __('write the icon name', '{domain}'),
                                    'type' => 'text'
                                ),
                                'featur_icon_color' => array(
                                    'label' => __('choose the icon color', '{domain}'),
                                    'type' => 'color-picker',
                                    'value' => '#FFFF'
                                ),
                                'featur_icon_title' => array(
                                    'label' => __('write the icon title', '{domain}'),
                                    'type' => 'text'
                                ),
                            ),
                            'attr' => array(),
                            'template' => 'icon card featur {{- featur_icon_title }}', // box title
                            // 'box-controls' => array( // buttons next to (x) remove box button
                            //     'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                            // ),
                            'limit' => 0, // limit the number of boxes that can be added
                            'add-button-text' => __('Add icon content', '{domain}'),
                            'sortable' => true,
                        ),
                    ),
                ),

                'testimonial_section' => array(
                    'title' => __('Testimonial Section', '{domain}'),
                    'options' => array(

                        'testimonial_section_title' => array(
                            'label' => __('add the testimonial sections title', '{domain}'),
                            'type' => 'text',
                            'value' => 'testimoniales',
                            'desc' => __('add the testimonial secction title', '{domain}')
                        ),

                        'testimonial_section_desc' => array(
                            'label' => __('add the testimonial sections desc', '{domain}'),
                            'type' => 'wp-editor',
                            'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem',
                            'desc' => __('add the testimonial section desc', '{domain}')
                        ),

                        'testimonial_card' => array(
                            'label' => __('add the testimonial', '{domain}'),
                            'desc' => __('add the testimonial content', '{domain}'),
                            'help' => __('use 400*400 px pic/', '{domain}'),
                            'type' => 'addable-box',
                            'box-options' => array(
                                'testimonial_pic' => array(
                                    'label' => __('Upload the image', '{domain}'),
                                    'type' => 'upload',
                                    'images_only' => true
                                ),
                                'testimonial_name' => array(
                                    'label' => __('write the testimonial name', '{domain}'),
                                    'type' => 'text'
                                ),
                                'testimonial_position' => array(
                                    'label' => __('choose the icon color', '{domain}'),
                                    'type' => 'text',
                                ),
                                'testimonial_desc' => array(
                                    'label' => __('write the icon title', '{domain}'),
                                    'type' => 'wp-editor'
                                ),
                            ),
                            'attr' => array(),
                            'template' => 'testimonial {{- testimonial }}', // box title
                            // 'box-controls' => array( // buttons next to (x) remove box button
                            //     'control-id' => '<small class="dashicons dashicons-smiley"></small>',
                            // ),
                            'limit' => 0, // limit the number of boxes that can be added
                            'add-button-text' => __('Add testimonial content', '{domain}'),
                            'sortable' => true,
                        ),
                    ),

                ),

                'Blog_section_setting' => array(
                    'label' => __('Blog Section', '{domain}'),
                    'options' => array(

                        'blog_section_title' => array(
                            'label' => __('Writ the title', '{domain}'),
                            'type' => 'text',
                            'value' => 'Blog',
                            'desc' => __('You can change the title', '{domain}'),
                        ),

                        'blog_section_desc' => array(
                            'label' => __('Writ the desc', '{domain}'),
                            'type' => 'wp-editor',
                            'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem',
                            'desc' => __('You can change the desc', '{domain}'),
                        ),

                        'blog_section_category' => array(
                            'label' => __('Choose Post Categories', '{domain}'),
                            'type' => 'multi-select',  // نوع انتخاب چندگانه
                            'value' => array(),  // مقدار پیش‌فرض
                            'help' => __('Choose your desired categories', '{domain}'),  // راهنمایی
                            'population' => 'taxonomy',  // استفاده از taxonomy برای پر کردن
                            'source' => 'category',  // استفاده از دسته‌بندی‌ها (categories)
                            'limit' => 100  // حداکثر تعداد آیتم‌های قابل انتخاب
                        ),
                    ),
                ),

                'Team_section_setting' => array(
                    'label' => __('Team Setting', '{domain}'),
                    'options' => array(

                        'Team_section_title' => array(
                            'label' => __('Write the title', '{domain}'),
                            'type' => 'text',
                            'value' => 'Team',
                            'desc' => __('You can change the title', '{domain}'),
                        ),

                        'Team_section_desc' => array(
                            'label' => __('Write the description', '{domain}'),
                            'type' => 'wp-editor',
                            'value' => 'Necessitatibus eius consequatur ex aliquid fuga eum quidem',
                            'desc' => __('You can change the description', '{domain}'),
                        ),

                        'Team_card' => array(
                            'label' => __('Add the Team card content', '{domain}'),
                            'type' => 'addable-box',
                            'desc' => __('Add the content of the team card', '{domain}'),
                            'box-options' => array(

                                'Team_img' => array(
                                    'label' => __('Add the image', '{domain}'),
                                    'type' => 'upload',
                                    'image_only' => true,
                                    'value' => array(),

                                ),

                                'Team_name' => array(
                                    'label' => __('Write the name', '{domain}'),
                                    'type' => 'text',
                                    'value' => ' ',
                                ),

                                'Team_postion' => array(
                                    'label' => __('Write the postion', '{domain}'),
                                    'type' => 'text',
                                    'value' => ' ',
                                ),

                                'Team_social' => array(
                                    'label' => __('Add social link', '{domain}'),
                                    'type' => 'addable-box',
                                    'box-options' => array(

                                        'Team_social_icon' => array(
                                            'label' => __('Write the social name', '{domain}'),
                                            'type' => 'text',
                                            'value' => ' ',
                                        ),

                                        'Team_social_link' => array(
                                            'label' => __('Write the social link', '{domain}'),
                                            'type' => 'text',
                                            'value' => ' ',
                                        ),
                                    ),
                                    'template' => 'Team Card Social {{- Team_social_icon }}', // box title
                                    'limit' => 4, // limit the number of boxes that can be added
                                    'add-button-text' => __('Add Social', '{domain}'),
                                    'sortable' => true,
                                ),
                            ),
                            'template' => 'Team Card {{- Team_name }}', // box title
                            'limit' => 0, // limit the number of boxes that can be added
                            'add-button-text' => __('Add Team Card', '{domain}'),
                            'sortable' => true,
                        ),
                    ),
                ),

                'Price_section' => array(
                    'label' => __('Price Section', '{domain}'),
                    'options' => array(

                        'price_section_title' => array(
                            'label' => __('Write the title', '{domain}'),
                            'type' => 'text',
                            'value' => 'Pricing',
                            'desc' => __('write the title', '{domain}'),
                        ),

                        'price_section_desc' => array(
                            'label' => __('wirte the desc', '{domain}'),
                            'type' => 'wp-editor',
                            'value' => 'Sit sint consectetur velit nemo qui impedit suscipit alias ea',
                            'desc' => __('write description fot the price sections'),
                        ),

                        'price_card' => array(
                            'label' => __('package name', '{domain}'),
                            'desc' => __('you can add price card content', '{domain}'),
                            'type' => 'addable-box',
                            'box-options' => array(

                                'package_name' => array(
                                    'label' => __('add package name', '{domain}'),
                                    'type' => 'text'
                                ),

                                'money_sign' => array(
                                    'label' => __('Money Sign', '{domain}'),
                                    'type' => 'text',
                                    'value' => '$'
                                ),

                                'money_number' => array(
                                    'label' => __('write number of the money', '{domain}'),
                                    'type' => 'text',
                                    'value' => '0'
                                ),

                                'money_time' => array(
                                    'label' => __('write the time per pay', '{domain}'),
                                    'type' => 'text',
                                    'value' => 'month'
                                ),

                                'price_item' => array(
                                    'label' => __('add items', '{domain}'),
                                    'type' => 'addable-box',
                                    // 'value' => array('Value 1', 'Value 2', 'Value 3'),
                                    // 'attr'  => array('class' => 'custom-class', 'data-foo' => 'bar'),
                                    'desc'  => __('add the item of the price card', '{domain}'),
                                    'box-options' => array(
                                        'price_item_data' => array(
                                            'label' => __('item data', '{domain}'),
                                            'type' => 'text'
                                        ),
                                        'line_through' => array(
                                            'type' => 'checkbox',
                                            'value' => false,
                                            // 'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                                        ),
                                    ),
                                    'template' => 'add item {{- price_item_data }}', // box title
                                    'limit' => 0, // limit the number of boxes that can be added
                                    'add-button-text' => __('add item', '{domain}'),
                                    'sortable' => true,
                                ),

                                'price_button' => array(
                                    'label' => __('add button text' . '{domain}'),
                                    'type' => 'text',
                                    'value' => 'Buy Package',
                                    'desc' => __('add the button text', '{domain}'),
                                ),
                                'price_button_link' => array(
                                    'label' => __('add the nutton link', '{domain}'),
                                    'type' => 'text',
                                    'value' => '#',
                                    'desc' => __('add the button link', '{domain}'),
                                ),

                            ),
                            'template' => 'price_item {{- package_name }}', // box title
                            'limit' => 3, // limit the number of boxes that can be added
                            'add-button-text' => __('Add price_item', '{domain}'),
                            'sortable' => true,
                        ),

                    ),
                ),

                'faq_section' => array(
                    'label' => __('Faq section', '{domain}'),
                    'options' => array(

                        'faq_section_title' => array(
                            'label' => __('Faq section Title', '{domain}'),
                            'type' => 'text',
                            'value' => 'Frequently Asked Questions',
                            'desc' => __('add the title section', '{domain}'),
                        ),

                        'faq_card' => array(
                            'label' => __('add faq content', '{domain}'),
                            'type' => 'addable-box',
                            'box-options' => array(

                                'faq_icon' => array(
                                    'label' => __('write the icon name', '{domain}'),
                                    'type' => 'text',
                                    'desc' => __('choose boxiicon and remixicon', '{domain}'),
                                ),

                                'faq_question' => array(
                                    'label' => __('write the faq title or question'),
                                    'type' => 'text',
                                    'desc' => __('write the question', '{domain}'),
                                ),

                                'faq_answer' => array(
                                    'label' => __('write the answer of the faq', '{domain}'),
                                    'type' => 'wp-editor',
                                    'desc' => __('write the answer of the questions')
                                ),
                            ),
                            'template' => ' add Faq {{- faq_question}} ',
                            'limit' => 0,
                            'add-button-text' => __('add faq', '{domain}'),
                            'sortable' => true,
                        ),

                    ),
                ),

            )
        )
    );
