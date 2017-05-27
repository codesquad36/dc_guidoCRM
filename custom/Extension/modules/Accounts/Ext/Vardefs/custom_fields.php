<?php

$dictionary['Account']['fields']['house_number'] = array(
	"name" => 'house_number',
	"vname" => 'LBL_HOUSE_NUMBER',
	"type" => "varchar",
	"len" => "200",
	"inline_edit" => true,
);


$dictionary['Account']['fields']['grootaandeelhouder'] = array(
	'name' => 'grootaandeelhouder',
        'vname' => 'LBL_GROONTAANDEELHOUDER',
        'type' => 'bool',
        'default' => '0',
        'reportable' => true,
);

?>