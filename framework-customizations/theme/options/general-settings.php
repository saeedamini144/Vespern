<?php if (! defined('FW')) {
	die('Forbidden');
}

// $options = array(
// 	'general' => array(
// 		'title'   => __( 'General', 'unyson' ),
// 		'type'    => 'tab',
// 		'options' => array(
// 			'general-box' => array(
// 				'title'   => __( 'General Settings', 'unyson' ),
// 				'type'    => 'box',
// 				'options' => array(
// 					'logo'    => array(
// 						'label' => __( 'Logo', 'unyson' ),
// 						'desc'  => __( 'Write your website logo name', 'unyson' ),
// 						'type'  => 'text',
// 						'value' => get_bloginfo( 'name' )
// 					),
// 					'favicon' => array(
// 						'label' => __( 'Favicon', 'unyson' ),
// 						'desc'  => __( 'Upload a favicon image', 'unyson' ),
// 						'type'  => 'upload'
// 					)
// 				)
// 			),
// 		)
// 	)
// );
$options = array(
	'general' => array(
		'title'   => __('General Setting of the main page', 'unyson'),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __('General Settings', 'unyson'),
				'type'    => 'box',
				'options' => array(
					'sitetitle'    => array(
						'label' => __('title', 'unyson'),
						'desc'  => __('Write your website first section title', 'unyson'),
						'type'  => 'text',
						// 'value' => get_bloginfo( 'name' )
						'value' => 'Grow your Business'
					)
				)
			),
		)
	)
);
