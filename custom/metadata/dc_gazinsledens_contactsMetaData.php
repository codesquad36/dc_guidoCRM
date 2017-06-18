<?php
// created: 2017-06-18 15:19:45
$dictionary["dc_gazinsledens_contacts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'dc_gazinsledens_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'DC_Gazinsledens',
      'rhs_table' => 'dc_gazinsledens',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'dc_gazinsledens_contacts_c',
      'join_key_lhs' => 'dc_gazinsledens_contactscontacts_ida',
      'join_key_rhs' => 'dc_gazinsledens_contactsdc_gazinsledens_idb',
    ),
  ),
  'table' => 'dc_gazinsledens_contacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'dc_gazinsledens_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'dc_gazinsledens_contactsdc_gazinsledens_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'dc_gazinsledens_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'dc_gazinsledens_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'dc_gazinsledens_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'dc_gazinsledens_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'dc_gazinsledens_contactsdc_gazinsledens_idb',
      ),
    ),
  ),
);