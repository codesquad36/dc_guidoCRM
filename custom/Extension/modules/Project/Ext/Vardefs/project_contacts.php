<?php

$dictionary['Project']['fields']['contacts_c']=array(
	'name' => 'contacts_c',
	'type' => 'link',
	'relationship' => 'project_contacts',
	'source' => 'non-db',
	'vname' => 'LBL_CONTACTS_SUBPANEL_TITLE',
);

$dictionary['Project']['relationships']['project_contacts']=array(
	'lhs_module' => 'Project',
	'lhs_table' => 'project',
	'lhs_key' => 'id',
	'rhs_module' => 'Contacts',
	'rhs_table' => 'contacts',
	'rhs_key' => 'project_id',
	'relationship_type' => 'one-to-many',
);


?>