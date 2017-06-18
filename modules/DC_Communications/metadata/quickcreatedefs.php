<?php
$module_name = 'DC_Communications';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'newsletter',
            'label' => 'LBL_NEWSLETTER',
          ),
          1 => 
          array (
            'name' => 'subscribe',
            'label' => 'LBL_SUBSCRIBE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_subscription',
            'label' => 'LBL_DATE_SUBSCRIPTION',
          ),
          1 => 
          array (
            'name' => 'date_unsubscription',
            'label' => 'LBL_DATE_UNSUBSCRIPTION',
          ),
        ),
        2 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
      ),
    ),
  ),
);
?>
