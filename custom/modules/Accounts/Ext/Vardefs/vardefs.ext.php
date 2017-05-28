<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-04-18 12:58:01
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2017-04-25 21:28:27
$dictionary['Account']['fields']['relatietype_c']['inline_edit']='1';
$dictionary['Account']['fields']['relatietype_c']['labelValue']='Relatietype';

 


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



 // created: 2017-04-25 21:03:56
$dictionary['Account']['fields']['regio_c']['inline_edit']='1';
$dictionary['Account']['fields']['regio_c']['labelValue']='Regio';

 

 // created: 2017-04-18 12:58:01
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2017-04-18 12:58:01
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2017-04-26 06:59:44
$dictionary['Account']['fields']['billing_address_street']['inline_edit']=true;
$dictionary['Account']['fields']['billing_address_street']['comments']='The street address used for billing address';
$dictionary['Account']['fields']['billing_address_street']['merge_filter']='disabled';

 

 // created: 2017-04-26 07:01:13
$dictionary['Account']['fields']['shipping_address_street']['inline_edit']=true;
$dictionary['Account']['fields']['shipping_address_street']['comments']='The street address used for for shipping purposes';
$dictionary['Account']['fields']['shipping_address_street']['merge_filter']='disabled';

 

 // created: 2017-04-18 12:58:01
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>