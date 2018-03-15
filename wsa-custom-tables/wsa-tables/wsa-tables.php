<?php

/**
 * This is tables module from WEBSTUDIO Agency S.r.l. 2017
 * www.webstudioagency.it
 * @class FLBasicExampleModule
 */
class FLWsaTableModule extends FLBuilderModule
{

    /**
     * Constructor function for the module. You must pass the
     * name, description, dir and url in an array to the parent class.
     *
     * @method __construct
     */
    public function __construct()
    {
        parent::__construct(array(
            'name' => __('WSA Tables', 'fl-builder'),
            'description' => __('The easiest way to create tables.', 'fl-builder'),
            'category' => __('WSA Modules', 'fl-builder'),
            'dir' => WSA_MODULE_TABLES_DIR . 'wsa-tables/',
            'url' => WSA_MODULE_TABLES_URL . 'wsa-tables/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled' => true // Defaults to true and can be omitted.
        ));

    }
}


/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('FLWsaTableModule', array(
    'general' => array( // Tab
        'title' => __('General', 'fl-builder'), // Tab title
        'sections' => array( // Tab Sections
            'general' => array( // Section
                'title' => __('Section Title', 'fl-builder'), // Section Title
                'fields' => array( // Section Fields
                    'select_columns' => array(
                        'type' => 'text',
                        'label' => __('Columns number', 'fl-builder'),
                        'default' => '2',
                        'maxlength' => '4',
                        'size' => '5'
                    ),
                    'select_rows' => array(
                        'type' => 'text',
                        'label' => __('Rows number', 'fl-builder'),
                        'default' => '2',
                        'maxlength' => '4',
                        'size' => '5'
                    ),

                    'textarea_field' => array(
                        'type' => 'textarea',
                        'label' => __('Column Name', 'fl-builder'),
                        'default' => '',
                        'placeholder' => __('Placeholder Text', 'fl-builder'),
                        'rows' => '6',
                        'multiple' => true,
                        'preview' => array(
                            'type' => 'text',
                            'selector' => '.fl-example-text'
                        )
                    ),
                    'manual_cell' => array(
                        'type' => 'form',
                        'label' => __('Row', 'fl_builder'),
                        'form' => 'cell_content',
                        'preview_text' => 'title',
                        'multiple' => true
                    )
                )
            )
        )
    ),
    'style' => array(
        'title' => __('Styles', 'fl-builder'),
        'sections' => array(
            'style' => array(
                'title' => 'Header Table ',
                'fields' => array(
                    'text_size' => array(
                        'type' => 'text',
                        'label' => __('Text Size', 'fl-builder'),
                        'default' => '1',
                        'maxlength' => '3',
                        'size' => '4',
                        'description' => 'vw'
                    ),
                    'background_header' => array(
                        'type' => 'color',
                        'label' => __('Header background', 'fl-builder'),
                        'default' => '1b1e24',
                        'show_reset' => true
                    ),

                    'color_header' => array(
                        'type' => 'color',
                        'label' => __('Header text color', 'fl-builder'),
                        'default' => 'd5dde5',
                        'show_reset' => true
                    ),

                    'align_header' => array(
                        'type' => 'select',
                        'label' => __('Header Alignment', 'fl-builder'),
                        'default' => 'left',
                        'options' => array(
                            'center' => __('Center', 'fl-builder'),
                            'left' => __('Left', 'fl-builder'),
                            'right' => __('Right', 'fl-builder')
                        ),
                        'help' => __('The alignment that will apply to all elements within the callout.', 'fl-builder'),
                        'preview' => array(
                            'type' => 'none'
                        )
                    )
                )
            ),
            'formatting' => array(
                'title' => __('Table content styles', 'fl-builder'),
                'fields' => array(

                    'background_content' => array(
                        'type' => 'color',
                        'label' => __('Table background', 'fl-builder'),
                        'default' => 'ffffff',
                        'show_reset' => true
                    ),

                    'background_hover' => array(
                        'type' => 'color',
                        'label' => __('Hover background', 'fl-builder'),
                        'default' => '4E5066',
                        'show_reset' => true
                    ),

                    'background_odd_row' => array(
                        'type' => 'color',
                        'label' => __('Odd Row background', 'fl-builder'),
                        'default' => 'EBEBEB',
                        'show_reset' => true
                    ),

                    'color_text_table_hover' => array(
                        'type' => 'color',
                        'label' => __('Font color hover', 'fl-builder'),
                        'default' => 'F2F2F2',
                        'show_reset' => true
                    ),
                    'align_table_text' => array(
                        'type' => 'select',
                        'label' => __('Content Alignment', 'fl-builder'),
                        'default' => 'left',
                        'options' => array(
                            'center' => __('Center', 'fl-builder'),
                            'left' => __('Left', 'fl-builder'),
                            'right' => __('Right', 'fl-builder')
                        ),
                        'help' => __('The alignment that will apply to all elements within the callout.', 'fl-builder'),
                        'preview' => array(
                            'type' => 'none'
                        )
                    )

                )
            ),
            'formatting2' => array(
                'title' => __('Border table styles', 'fl-builder'),
                'fields' => array(
                    'color_border_table' => array(
                        'type' => 'color',
                        'label' => __('Border color', 'fl-builder'),
                        'default' => 'C1C3D1',
                        'show_reset' => true
                    ),
                    'height_border' => array(
                        'type' => 'text',
                        'label' => __('Border Weight', 'fl-builder'),
                        'default' => '1',
                        'maxlength' => '2',
                        'size' => '3',
                        'description' => 'px',
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.fl-separator',
                            'property' => 'border-top-width',
                            'unit' => 'px'
                        )
                    ),
                    'style_border' => array(
                        'type' => 'select',
                        'label' => __('Style', 'fl-builder'),
                        'default' => 'solid',
                        'options' => array(
                            'none' => _x('None', 'Border type.', 'fl-builder'),
                            'solid' => _x('Solid', 'Border type.', 'fl-builder'),
                            'dashed' => _x('Dashed', 'Border type.', 'fl-builder'),
                            'dotted' => _x('Dotted', 'Border type.', 'fl-builder')
                        ),
                        'preview' => array(
                            'type' => 'css',
                            'selector' => '.fl-separator',
                            'property' => 'border-top-style'
                        ),
                        'help' => __('The type of border to use. Double borders must have a height of at least 3px to render properly.', 'fl-builder')
                    ),

                    'padding' => array(
                        'type' => 'text',
                        'label' => __('Padding', 'fl-builder'),
                        'default' => '12',
                        'maxlength' => '3',
                        'size' => '4',
                        'description' => 'px'
                    ),
                    'border_radius' => array(
                        'type' => 'text',
                        'label' => __('Round Corners', 'fl-builder'),
                        'default' => '0',
                        'maxlength' => '3',
                        'size' => '4',
                        'description' => 'px'
                    )
                )
            )
        )
    )
));
FLBuilder::register_settings_form('cell_content', array(
    'title' => __('Row field', 'fl-builder'),
    'tabs' => array(
        'general' => array(
            'title' => __('General', 'fl-builder'),
            'sections' => array(
                'general' => array(
                    'title' => '',
                    'fields' => array(

                        'cell_textarea_field' => array(
                            'type' => 'textarea',
                            'label' => __('Cell Field', 'fl-builder'),
                            'default' => '',
                            'placeholder' => __('Placeholder Text', 'fl-builder'),
                            'rows' => '6',
                            'multiple' => true
                        )
                    )


                )
            )
        )
    )
));
