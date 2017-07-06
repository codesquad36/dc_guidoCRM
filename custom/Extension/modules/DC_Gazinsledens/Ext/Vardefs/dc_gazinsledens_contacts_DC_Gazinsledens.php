<?php
// created: 2017-06-18 15:19:45
$dictionary["DC_Gazinsledens"]["fields"]["dc_gazinsledens_contacts"] = array (
  'name' => 'dc_gazinsledens_contacts',
  'type' => 'link',
  'relationship' => 'dc_gazinsledens_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_DC_GAZINSLEDENS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'dc_gazinsledens_contactscontacts_ida',
);
$dictionary["DC_Gazinsledens"]["fields"]["dc_gazinsledens_contacts_name"] = array (
  'name' => 'dc_gazinsledens_contacts_name',
      'importable' => 'true',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DC_GAZINSLEDENS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'dc_gazinsledens_contactscontacts_ida',
  'link' => 'dc_gazinsledens_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["DC_Gazinsledens"]["fields"]["dc_gazinsledens_contactscontacts_ida"] = array (
  'name' => 'dc_gazinsledens_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'dc_gazinsledens_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DC_GAZINSLEDENS_CONTACTS_FROM_DC_GAZINSLEDENS_TITLE',
);
