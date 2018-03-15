<?php


?>
<div class="fl-table-wrapper col-md-12 col-sm-12 col-xs-12">
    <div class="fl-table ">
        
<?php

	for ($i=0; $i < count($settings->select_columns); $i++)

		$tableCell = $settings->select_columns[$i]-1;
        
	?>


<?php

echo '<table  class="table table-fill">';

for ($tr=0; $tr<1; $tr++){
    echo '<thead class="table-title">';

    for ($td=0; $td<=$settings->select_columns-1; $td++){
    	 echo '<td>'. $settings->textarea_field[$td] .'</td>';
    	}
   
    echo '</thead>';
}
 echo '<tbody class="table-hover">';
for ($tr=0; $tr<=$settings->select_rows-1; $tr++){
    echo '<tr>';
   
    for ($td=0; $td<=$settings->select_columns-1; $td++){

        echo '<td>'. $settings->manual_cell[$tr]->cell_textarea_field[$td] .'</td>';
    }

    echo '</tr>';
}

echo '</tbody>';
echo '</table>';


?>
       
    </div>
</div>
