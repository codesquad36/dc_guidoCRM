<?php
$module_name = 'DC_Communications';
$listViewDefs [$module_name] = 
array (
  'NEWSLETTER' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NEWSLETTER',
    'width' => '10%',
    'default' => true,
  ),
  'SUBSCRIBE' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_SUBSCRIBE',
    'width' => '10%',
  ),
  'DATE_SUBSCRIPTION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_SUBSCRIPTION',
    'width' => '10%',
    'default' => true,
  ),
  'DATE_UNSUBSCRIPTION' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DATE_UNSUBSCRIPTION',
    'width' => '10%',
    'default' => true,
  ),
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => false,
    'link' => true,
  ),
);
?>
