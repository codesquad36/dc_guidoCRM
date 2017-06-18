<?php
// created: 2017-06-18 15:19:45
$dictionary["DC_Communications"]["fields"]["dc_communications_contacts"] = array (
  'name' => 'dc_communications_contacts',
  'type' => 'link',
  'relationship' => 'dc_communications_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_DC_COMMUNICATIONS_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'dc_communications_contactscontacts_ida',
);
$dictionary["DC_Communications"]["fields"]["dc_communications_contacts_name"] = array (
  'name' => 'dc_communications_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DC_COMMUNICATIONS_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'dc_communications_contactscontacts_ida',
  'link' => 'dc_communications_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["DC_Communications"]["fields"]["dc_communications_contactscontacts_ida"] = array (
  'name' => 'dc_communications_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'dc_communications_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_DC_COMMUNICATIONS_CONTACTS_FROM_DC_COMMUNICATIONS_TITLE',
);
