<?php
$layout_defs["Project"]["subpanel_setup"]['project_documents'] = array (
  'order' => 100,
  'module' => 'Documents',
  'subpanel_name' => 'default',
  'sort_order' => 'desc',
  'sort_by' => 'date_modified',
  'title_key' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
  'get_subpanel_data' => 'documents',
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
