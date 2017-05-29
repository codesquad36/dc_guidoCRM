<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2017-04-18 12:58:01
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

$dictionary['Account']['fields']['huisnummer_c'] =
    array (
      'inline_edit' => '1',
      'labelValue' => 'Huisnummer',
      'required' => false,
      'name' => 'huisnummer_c',
      'vname' => 'LBL_HUISNUMMER_c',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );



$dictionary['Account']['fields']['deal_status'] =
    array (
      'inline_edit' => '1',
      'labelValue' => 'Deal Status',
      'required' => false,
      'name' => 'deal_status',
      'vname' => 'LBL_DEAL_STATUS',
      'type' => 'enum',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'options' => 'deal_status_dom',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );



 // created: 2017-04-25 21:28:27
$dictionary['Account']['fields']['relatietype_c']['inline_edit']='1';
$dictionary['Account']['fields']['relatietype_c']['labelValue']='Relatietype';
$dictionary['Account']['fields']['relatietype_c']['type']='multienum';

 


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

 

$dictionary['Account']['fields']['toevoeging_c'] =
    array (
      'inline_edit' => '1',
      'labelValue' => 'Toevoeging',
      'required' => false,
      'name' => 'toevoeging_c',
      'vname' => 'LBL_TOEVOEGING_C',
      'type' => 'varchar',
      'massupdate' => '0',
      'default' => '',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    );



 // created: 2017-04-26 07:01:13
$dictionary['Account']['fields']['shipping_address_street']['inline_edit']=true;
$dictionary['Account']['fields']['shipping_address_street']['comments']='The street address used for for shipping purposes';
$dictionary['Account']['fields']['shipping_address_street']['merge_filter']='disabled';

 

 // created: 2017-04-18 12:58:01
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 
?>