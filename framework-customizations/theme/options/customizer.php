<?php
// $options = array(
//     'section_1' => array(
//         'title' => __('First Section', '{domain}'),
//         'options' => array(

//             'text_1' => array(
//                 'type' => 'text',
//                 'value' => 'Default Value',
//                 'label' => __('Unyson Option', '{domain}'),
//                 'desc' => __('Option Description', '{domain}'),
//             ),

//         ),
//     ),
// );
// $options = array(
//     'panel_1' => array(
//         'title' => __('Unyson Panel', '{domain}'),
//         'options' => array(

//             'section_1' => array(
//                 'title' => __('Unyson Section #1', '{domain}'),
//                 'options' => array(

//                     'option_1' => array(
//                         'type' => 'text',
//                         'value' => 'Default Value',
//                         'label' => __('Unyson Option #1', '{domain}'),
//                         'desc' => __('Option Description', '{domain}'),
//                     ),

//                 ),
//             ),

//             'section_2' => array(
//                 'title' => __('Unyson Section #2', '{domain}'),
//                 'options' => array(

//                     'option_2' => array(
//                         'type' => 'text',
//                         'value' => 'Default Value',
//                         'label' => __('Unyson Option #2', '{domain}'),
//                         'desc' => __('Option Description', '{domain}'),
//                     ),
//                     'option_3' => array(
//                         'type' => 'text',
//                         'value' => 'Default Value',
//                         'label' => __('Unyson Option #3', '{domain}'),
//                         'desc' => __('Option Description', '{domain}'),
//                     ),

//                 ),
//             ),

//         ),
//     ),
// );
$options = array(
    'panel_1' => array(
        'title' => __('Home edite', '{domain}'),

        'options' => array(
            'first_section' => array(
                'title' => __('First section', '{domain}'),
                'options' => array(

                    'first_section_title' => array(
                        'label' => 'Change The main title',
                        'type' => 'text',
                        'value' => 'we Help you to improve your bussines',
                        'desc' => 'write your header title here'
                    ),
                    'first_section_text' => array(
                        'label' => 'Change The text under the title',
                        'type' => 'wp-editor',
                        'value' => 'we Help you to improve your bussines',
                        'desc' => 'write your header title here'
                    ),
                    'first_section_button' => array(
                        'label' => 'Button name',
                        'type' => 'text',
                        'value' => 'Call us',
                        'desc' => " change the button name"
                    ),
                    'first_section_button_link' => array(
                        'label' => 'Button Link',
                        'type' => 'text',
                        'value' => '#',
                        'desc' => " change the button Link"
                    ),
                    'first_section_image' => array(
                        'type'  => 'upload',
                        'value' => array(
                            /*
                            'attachment_id' => '9',
                            'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
                            */
                            // if value is set in code, it is not considered and not used
                            // because there is no sense to set hardcode attachment_id
                        ),
                        // 'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
                        'label' => 'upload your image',
                        'desc'  => 'Upload the banner of the main page',
                        'help'  => __('Help tip', '{domain}'),
                        /**
                         * If set to `true`, the option will allow to upload only images, and display a thumb of the selected one.
                         * If set to `false`, the option will allow to upload any file from the media library.
                         */
                        'images_only' => true,
                        /**
                     * An array with allowed files extensions what will filter the media library and the upload files.
                     */
                        // 'files_ext' => array( 'doc', 'pdf', 'zip' ),
                        /**
                     * An array with extra mime types that is not in the default array with mime types from the javascript Plupload library.
                     * The format is: array( '<mime-type>, <ext1> <ext2> <ext2>' ).
                     * For example: you set rar format to filter, but the filter ignore it , than you must set
                     * the array with the next structure array( '.rar, rar' ) and it will solve the problem.
                     */
                        // 'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
                    ),
                )
            )
        )
    )
);
