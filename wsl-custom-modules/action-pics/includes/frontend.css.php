
.fl-node-<?php echo $id; ?> figure {
    background:#<?php echo $settings->actionimage_link_field; ?>;
  
}

.fl-node-<?php echo $id; ?> h2 {
    color:#<?php echo $settings->actionimg_textarea_field_color; ?>;
    font-size: <?php echo $settings->actionimg_textarea_font_size; ?>px;
   
}

.fl-node-<?php echo $id; ?> figure.effect-bubba h2 {
    padding-top: <?php echo $settings->textarea_field_top; ?>px;
}

.fl-node-<?php echo $id; ?> p {
    color:#<?php echo $settings->actionimg_textarea_field_color2; ?>;
}

.fl-node-<?php echo $id; ?> figure.effect-bubba p {
    padding-top: <?php echo $settings->textarea_field_top2; ?>px;
    font-size: <?php echo $settings->actionimg_textarea_font_size2; ?>px;
}

.fl-node-<?php echo $id; ?> figure.effect-bubba figcaption::before {
    border-right:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
    border-bottom:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
    border-left:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
    border-top:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
}

.fl-node-<?php echo $id; ?> figure.effect-bubba figcaption::after {
    border-right:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
    border-bottom:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
    border-left:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
    border-top:<?php echo $settings->actionimg_height_border; ?>px <?php echo $settings->actionimg_style_border; ?> #<?php echo $settings->actionimg_color_border; ?>;
}

.fl-node-<?php echo $id; ?> figure.effect-bubba figcaption::before,
.fl-node-<?php echo $id; ?> figure.effect-bubba figcaption::after {
	top: <?php echo $settings->actionimg_style_border_padding_topbottom; ?>px;
	right: <?php echo $settings->actionimg_style_border_padding_right; ?>px;
	bottom: <?php echo $settings->actionimg_style_border_padding_topbottom; ?>px;
	left: <?php echo $settings->actionimg_style_border_padding_left; ?>px;
}


 
