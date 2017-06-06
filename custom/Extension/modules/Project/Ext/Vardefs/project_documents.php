<?php

$dictionary['Project']['fields']['documents']=array(
	'name' => 'documents',
	'type' => 'link',
	'relationship' => 'project_documents',
	'source' => 'non-db',
	'vname' => 'LBL_DOCUMENTS_SUBPANEL_TITLE',
);

$dictionary['Project']['relationships']['project_documents']=array(
	'lhs_module' => 'Project',
	'lhs_table' => 'project',
	'lhs_key' => 'id',
	'rhs_module' => 'Documents',
	'rhs_table' => 'documents',
	'rhs_key' => 'project_id',
	'relationship_type' => 'one-to-many',
);


?>