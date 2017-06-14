<?php
$layout_defs["Project"]["subpanel_setup"]['project_contacts'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'date_modified',
  'title_key' => 'LBL_CONTACTS_SUBPANEL_TITLE',
  'get_subpanel_data' => 'contacts_c',
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
