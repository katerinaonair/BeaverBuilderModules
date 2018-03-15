

.fl-node-<?php echo $id; ?> .table-title tr:nth-child(odd) td {
    background-color:<?php echo ($settings->background_header) ? '#'.$settings->background_header : 'transparent'; ?>;
    color:<?php echo ($settings->color_header) ? '#'.$settings->color_header : 'transparent'; ?>;
    text-align: <?php echo ($settings->align_header) ?>;
     <?php if( $settings->button_padding['button_top_padding'] >= 0) { ?>padding: <?php echo $settings->rows_padding['rows_padding']; ?>px;<?php } ?>
}

.fl-node-<?php echo $id; ?>  th {
    color:<?php echo ($settings->color_text_table) ? '#'.$settings->color_text_table : 'transparent'; ?>;
}


.fl-node-<?php echo $id; ?> tr:hover td {
	background-color:<?php echo ($settings->background_hover) ? '#'.$settings->background_hover : 'transparent'; ?>;
  color:<?php echo ($settings->color_text_table_hover) ? '#'.$settings->color_text_table_hover : 'transparent'; ?>;
}
.fl-node-<?php echo $id; ?> tr:nth-child(odd):hover td {
	background-color:<?php echo ($settings->background_hover) ? '#'.$settings->background_hover : 'transparent'; ?>;
  color:<?php echo ($settings->color_text_table_hover) ? '#'.$settings->color_text_table_hover : 'transparent'; ?>;
}

.fl-node-<?php echo $id; ?> tr:nth-child(odd) td{
	background-color:<?php echo ($settings->background_odd_row) ? '#'.$settings->background_odd_row : 'transparent'; ?>;
}

.fl-node-<?php echo $id; ?> td {
  padding: <?php echo $settings->padding_cells['padding_cells']; ?>px;
  background-color:<?php echo ($settings->background_content) ? '#'.$settings->background_content : 'transparent'; ?>;
  border-right:<?php echo $settings->height_border; ?>px <?php echo $settings->style_border; ?> #<?php echo $settings->color_border_table; ?>;
  border-bottom:<?php echo $settings->height_border; ?>px <?php echo $settings->style_border; ?> #<?php echo $settings->color_border_table; ?>;
  border-radius: <?php echo $settings->border_radius; ?>px;
}

.fl-node-<?php echo $id; ?>tr:last-child td:first-child {
    border-bottom-left-radius:  <?php echo $settings->border_radius; ?>px;
    border-bottom-right-radius:  <?php echo $settings->border_radius; ?>px;
}


.fl-node-<?php echo $id; ?> table tr td {
   text-align: <?php echo ($settings->align_table_text) ?>;
}

.fl-node-<?php echo $id; ?> table, th td {
  border:<?php echo $settings->height_border; ?>px <?php echo $settings->style_border; ?> #<?php echo $settings->color_border_table; ?>;
}

 .fl-node-<?php echo $id; ?> table tr td {
   padding: <?php echo $settings->padding; ?>px;
}

.fl-builder-content .fl-node-<?php echo $id; ?> td {
	font-size: <?php echo $settings->text_size; ?>px;
}

.fl-node-<?php echo $id; ?>.table>thead>tr>td{
    padding: <?php echo $settings->padding; ?>px;
    vertical-align: middle;
    border:<?php echo $settings->height_border; ?>px <?php echo $settings->style_border; ?> #<?php echo $settings->color_border_table; ?>;
}





