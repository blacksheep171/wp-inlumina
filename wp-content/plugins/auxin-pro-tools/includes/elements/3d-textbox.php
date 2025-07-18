<?php
/**
 * Text element
 *
 * 
 * @package    Auxin
 * @license    LICENSE.txt
 * @author     
 * @link       https://phlox.pro
 * @copyright  (c) 2010-2025 
 */
function  auxin_get_3d_textbox_master_array( $master_array ) {

    $master_array['aux_3d_textbox'] = array(
        'name'                          => __( '3D text box', PLUGIN_DOMAIN ),
        'auxin_output_callback'         => 'auxin_widget_3d_textbox_callback',
        'base'                          => 'aux_3d_textbox',
        'description'                   => __( 'Image with text.', PLUGIN_DOMAIN ),
        'class'                         => 'aux-widget-3d-textbox',
        'show_settings_on_create'       => true,
        'weight'                        => 1,
        'is_widget'                     => false,
        'is_shortcode'                  => true,
        'category'                      => THEME_NAME,
        'group'                         => '',
        'admin_enqueue_js'              => '',
        'admin_enqueue_css'             => '',
        'front_enqueue_js'              => '',
        'front_enqueue_css'             => '',
        'icon'                          => 'aux-element aux-pb-icons-text',
        'custom_markup'                 => '',
        'js_view'                       => '',
        'html_template'                 => '',
        'deprecated'                    => '',
        'content_element'               => '',
        'as_parent'                     => '',
        'as_child'                      => '',
        'params' => array(
            array(
                'heading'           => __( 'Title', PLUGIN_DOMAIN ),
                'description'       => __( 'Text title, leave it empty if you don`t need title.', PLUGIN_DOMAIN ),
                'param_name'        => 'title',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'title',
                'description'       => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Subtitle', PLUGIN_DOMAIN ),
                'description'       => '',
                'param_name'        => 'subtitle',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'subtitle',
                'description'       => '',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Link', PLUGIN_DOMAIN ),
                'description'       => '',
                'param_name'        => 'link',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'title_link',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '' ,
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Wrapper Background image', PLUGIN_DOMAIN ),
                'description'       => '',
                'param_name'        => 'wrapper_bg_image',
                'type'              => 'attach_image',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'wrapper_bg_image',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Wrapper Background image width', PLUGIN_DOMAIN ),
                'description'       => '',
                'param_name'        => 'box_width',
                'type'              => 'textfield',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'box_width',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Wrapper Background Image height', PLUGIN_DOMAIN ),
                'description'       => '',
                'param_name'        => 'box_height',
                'type'              => 'textfield',
                'def_value'         => '',
                'value'             => '',
                'holder'            => '',
                'class'             => 'box_height',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Maximum Tilt', PLUGIN_DOMAIN ),
                'description'       => __( 'Set it to 0 in order to disable tilt.', PLUGIN_DOMAIN ),
                'param_name'        => 'tilt',
                'type'              => 'textfield',
                'def_value'         => '20',
                'value'             => '20',
                'holder'            => '',
                'class'             => 'maximum_tilt',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => __( 'Appearance', PLUGIN_DOMAIN ),
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Tilt Time', PLUGIN_DOMAIN ),
                'description'       => __( 'Use a value between 100 (fast) and 2000 (slow tilt)', PLUGIN_DOMAIN ),
                'param_name'        => 'time',
                'type'              => 'textfield',
                'def_value'         => '1000',
                'value'             => '1000',
                'holder'            => '',
                'class'             => 'tilt_time',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => __( 'Appearance', PLUGIN_DOMAIN ),
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( '3D Margin', PLUGIN_DOMAIN ),
                'description'       => __( 'Margin with background image.', PLUGIN_DOMAIN ),
                'param_name'        => 'transformz',
                'type'              => 'textfield',
                'def_value'         => '50',
                'value'             => '50',
                'holder'            => '',
                'class'             => 'transformz',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => __( 'Appearance', PLUGIN_DOMAIN ),
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Text Box Width (%)', PLUGIN_DOMAIN ),
                'param_name'        => 'width',
                'type'              => 'textfield',
                'def_value'         => '50',
                'value'             => '50',
                'holder'            => '',
                'class'             => 'width',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => __( 'Appearance', PLUGIN_DOMAIN ),
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Text Box Height (%)', PLUGIN_DOMAIN ),
                'param_name'        => 'height',
                'type'              => 'textfield',
                'def_value'         => '50',
                'value'             => '50',
                'holder'            => '',
                'class'             => 'heigth',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => __( 'Appearance', PLUGIN_DOMAIN ),
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Text Position', PLUGIN_DOMAIN ),
                'param_name'        => 'text_position',
                'type'              => 'dropdown',
                'def_value'         => 'center-center',
                'value'             => array(
                    'top-left'      => __( 'Top Left', PLUGIN_DOMAIN ),
                    'top-center'    => __( 'Top Center', PLUGIN_DOMAIN ),
                    'top-right'     => __( 'Top Right', PLUGIN_DOMAIN ),
                    'center-left'   => __( 'Center Left', PLUGIN_DOMAIN ),
                    'center-center' => __( 'Center Center', PLUGIN_DOMAIN ),
                    'center-right'  => __( 'Center Right', PLUGIN_DOMAIN ),
                    'bottom-left'   => __( 'Bottom Left', PLUGIN_DOMAIN ),
                    'bottom-center' => __( 'Bottom Center', PLUGIN_DOMAIN ),
                    'bottom-right'  => __( 'Bottom Right', PLUGIN_DOMAIN ),
                ),
                'holder'            => '',
                'class'             => 'heigth',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            ),
            array(
                'heading'           => __( 'Extra class name', PLUGIN_DOMAIN ),
                'description'       => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', PLUGIN_DOMAIN ),
                'param_name'        => 'extra_classes',
                'type'              => 'textfield',
                'value'             => '',
                'def_value'         => '',
                'holder'            => 'textfield',
                'class'             => 'extra_classes',
                'admin_label'       => false,
                'dependency'        => '',
                'weight'            => '',
                'group'             => '',
                'edit_field_class'  => ''
            )
        )
    );

    return $master_array;
}

add_filter( 'auxin_master_array_shortcodes', 'auxin_get_3d_textbox_master_array', 10, 1 );

// This is the widget call back in fact the front end out put of this widget comes from this function
function auxin_widget_3d_textbox_callback( $atts, $shortcode_content = null ){

    global $aux_content_width;

    // Defining default attributes
    $default_atts = array(
        'title'              => '', // section title
        'subtitle'           => '', // Text as subtitle under the title
        'link'               => '#', // the link on title
        'tilt'               => '20',
        'time'               => '1000',
        'width'              => '50',
        'height'             => '50',
        'box_width'          => '',
        'box_height'         => '',
        'text_position'      => 'center-center',
        'transformz'         => '30',
        'scale'              => 1,
        'reverse'            => false,
        'background_display' => 'center',//  center, fixed , cover, tile
        'overlay_color'      => '',
        'wrapper_bg_image'   => '',
        'btn_target'         => '',
        'extra_classes'      => '', // custom css class names for this element
        'custom_el_id'       => '', // custom id attribute for this element
        'base_class'         => 'aux-widget-3d-textbox'  // base class name for container
    );


    $result                = auxin_get_widget_scafold( $atts, $default_atts );

    extract( $result['parsed_atts'] );

    if ( ! empty( $wrapper_bg_image ) && is_numeric( $wrapper_bg_image ) ){
         $wrapper_bg_image = wp_get_attachment_image_url( $wrapper_bg_image, 'full' );
    }

    // Box Main Classes

    $main_classes  = '';
    $main_classes .= 'aux-3d-textbox-widget-inner aux-tilt-box aux-wrap-style-box ';
    $main_classes .= 'aux-text-position-' . $text_position;

    //---------------------------------------------
    // Box Inline Styles

    $main_styles   = '';
    $main_styles  .= empty( $wrapper_bg_color ) ? '' : 'background-color: ' . esc_attr( $wrapper_bg_color ) . '; ';
    $main_styles  .= empty( $wrapper_bg_image ) ? '' : 'background-image: url(' . esc_attr( $wrapper_bg_image ) . ');';
    $main_styles  .= empty( $box_width ) ? '' : 'width:' . $box_width . 'px;';
    $main_styles  .= empty( $box_height ) ? '' : 'height:' . $box_height . 'px;';
    $main_styles   = 'style="' . $main_styles . '"';

    $textbox_style   = '';
    $transformz      = empty( $transformz ) ? '0' : $transformz;
    $textbox_style  .= 'transform: translateX(-50%) translateY(-50%) translateZ('.esc_attr( $transformz ).'px);';
    $textbox_style  .= empty( $width ) ? 'width:50%;' : 'width: ' . esc_attr( $width ) . '%; ';
    $textbox_style  .= empty( $height ) ? 'height: 50%;' : 'height: ' . esc_attr( $height ) . '%; ';
    $textbox_style   = 'style="' . $textbox_style . '"';

    $main_attributes = '';
    $main_attributes = 'title="'.esc_attr( $title ).'" ';
    $main_attributes = 'data-max-tilt="'.esc_attr( $tilt ).'" data-time="'. esc_attr( $time ) .'" data-tilt-scale="' . esc_attr( $scale ) . '" data-tilt-reverse="' . esc_attr( $reverse ) . '"';



    ob_start();
    // widget header ------------------------------
    echo $result['widget_header'];
?>
        <a href="<?php echo esc_url( $link ); ?>" class="<?php echo esc_attr( $main_classes );?>" <?php echo $main_styles;?> <?php echo $main_attributes;?> >
            <div class="aux-3d-textbox-widget-content" <?php echo $textbox_style; ?>>
                <?php if( ! empty( $title ) ) { ?>
                <h4 class="col-title"><?php echo $title; ?></h4>
                <?php } if( ! empty( $subtitle ) ) { ?>
                <h5 class="col-subtitle"><?php echo $subtitle; ?></h5>
                <?php } ?>
            </div>
        </a>

<?php
    // widget footer ------------------------------
    echo $result['widget_footer'];

    return ob_get_clean();
}
