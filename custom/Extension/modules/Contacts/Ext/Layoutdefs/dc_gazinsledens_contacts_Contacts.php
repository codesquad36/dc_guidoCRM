<?php
 // created: 2017-06-18 15:19:45
$layout_defs["Contacts"]["subpanel_setup"]['dc_gazinsledens_contacts'] = array (
  'order' => 100,
  'module' => 'DC_Gazinsledens',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_DC_GAZINSLEDENS_CONTACTS_FROM_DC_GAZINSLEDENS_TITLE',
  'get_subpanel_data' => 'dc_gazinsledens_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
