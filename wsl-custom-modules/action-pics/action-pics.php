<?php

/**
 * This is a module that includs links, images and text fields
 * setup necessary to get it working.
 *
 * @class flActionPicsModule
 */
class FLActionPics extends FLBuilderModule {

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name'          => __('Action pics', 'fl-builder'),
            'description'   => __('Action Pics module to attract clients.', 'fl-builder'),
            'category'		=> __('WSL Modules', 'fl-builder'),
            'dir'           => FL_MODULE_DIR . 'action-pics/',
            'url'           => FL_MODULE_URL . 'action-pics/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
            'partial_refresh' => true,
        ));
    }
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLActionPics', array(
    'general'       => array( // Tab
        'title'         => __('General', 'fl-builder'), // Tab title
        'sections'      => array( // Tab Sections
            'general'       => array( // Section
                'title'         => __('Action pics', 'fl-builder'), // Section Title
                'fields'        => array( // Section Fields

           'my_link_field' => array(
                    'type'          => 'link',
                    'label'         => __('Link', 'fl-builder'),
                    'default'       => 'http://webstudiolab.it/'
                    ),

            'actionimg_photo_field' => array(
	  					            'type'          => 'photo',
	  					            'label'         => __('Photo Field', 'textdomain'),
	  					            'show_remove'	=> false,
                          'show_reset'    => true,

	  					),
      
              'actionimg_photo_field_bg'    => array(
                  'type'              => 'color',
                  'label'             => __('Background Color', 'fl-builder'),
                  'default'           => 'ffffff',
                  'show_reset'        => true,
                  'preview'           => array(
                      'type'              => 'css',
                      'selector'          => '.effect-bubba',
                      'property'          => 'style'
                  ),
              ),
            'textarea_field' => array(
                'type'          => 'textarea',
                'label'         => __('Textarea Field', 'fl-builder'),
                'default'       => '',
                'placeholder'   => __('Hook the client with a nice frase', 'fl-builder'),
                'rows'          => '6',
                'color'         => 'ffffff',
                'preview'         => array(
                  'type'             => 'text',
                  'selector'         => '.fl-example-text'
                ),
            ),
            'textarea_field_top' => array(
						'type'          => 'text',
						'label'         => __( 'Texarea Padding Top ', 'fl-builder' ),
						'default'       => '15',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
             
              'actionimg_textarea_field_color' => array(
                'type'          => 'color',
                'label'         => __( 'Text Color', 'fl-builder' ),
                'default'       => 'fffff',
                'show_reset'    => true
              ),
              'actionimg_textarea_font_size' => array(
						'type'          => 'text',
						'label'         => __( 'Font Size', 'fl-builder' ),
						'default'       => '24',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
             
              
            'textarea_field2' => array(
                'type'          => 'textarea',
                'label'         => __('Textarea Field 2', 'fl-builder'),
                'default'       => '',
                'placeholder'   => __('Describe your idea here', 'fl-builder'),
                'rows'          => '6',
                'color'         => 'ffffff',
                'preview'         => array(
                    'type'             => 'text',
                    'selector'         => '.fl-example-text'
                  ),
              ),

              'textarea_field_top2' => array(
						'type'          => 'text',
						'label'         => __( 'Texarea Padding Top ', 'fl-builder' ),
						'default'       => '15',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),

               'actionimg_textarea_field_color2' => array(
                'type'          => 'color',
                'label'         => __( 'Text Color2', 'fl-builder' ),
                'default'       => 'fffff',
                'show_reset'    => true
              ),
               'actionimg_textarea_font_size2' => array(
						'type'          => 'text',
						'label'         => __( 'Font Size', 'fl-builder' ),
						'default'       => '14',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),

                )
            )
        )
    ),
 'style'      => array(
			'title'         => __('Frame Styles', 'fl-builder'),
			'sections'      => array(
				'style'       => array(
					'title'         => 'Styles ',
					'fields'        => array(
                        
            'actionimg_color_border'          => array(
                         'type'          => 'color',
                         'label'         => __('Border color', 'fl-builder'),
                         'default'       => 'FFFFFF',
                         'show_reset'    => true
                            ),
            'actionimg_height_border'        => array(
                        'type'          => 'text',
                         'label'         => __('Border Weight', 'fl-builder'),
                          'default'       => '2',
                          'maxlength'     => '2',
                          'size'          => '3',
                          'description'   => 'px',
                          'preview'       => array(
                            'type'          => 'css',
                            'selector'      => '.fl-separator',
                            'property'      => 'border-top-width',
                            'unit'          => 'px'
                            )
                      ),
            'actionimg_style_border'         => array(
                         'type'          => 'select',
                         'label'         => __('Style', 'fl-builder'),
                         'default'       => 'solid',
                          'options'       => array(
                              'solid'         => _x( 'Solid', 'Border type.', 'fl-builder' ),
                              'dashed'        => _x( 'Dashed', 'Border type.', 'fl-builder' ),
                              'dotted'        => _x( 'Dotted', 'Border type.', 'fl-builder' )
                           ),
                     'preview'       => array(
                         'type'          => 'css',
                         'selector'      => '.fl-separator',
                          'property'      => 'border-top-style'
                     ),
                         'help'          => __('The type of border to use. Double borders must have a height of at least 3px to render properly.', 'fl-builder'),
                        ),
             'actionimg_style_border_padding_topbottom' => array(
						'type'          => 'text',
						'label'         => __( 'Padding Top', 'fl-builder' ),
						'default'       => '15',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
            
             'actionimg_style_border_padding_left' => array(
						'type'          => 'text',
						'label'         => __( 'Padding Left', 'fl-builder' ),
						'default'       => '35',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
             'actionimg_style_border_padding_right' => array(
						'type'          => 'text',
						'label'         => __( 'Padding  Right', 'fl-builder' ),
						'default'       => '35',
						'maxlength'     => '3',
						'size'          => '4',
						'description'   => 'px'
					),
                 )
				),
           
		),),    
    
    
));


