<?php

$dictionary['Document']['fields']['project_name']=array(
	'name' => 'project_name',
	'rname' => 'name',
	'id_name' => 'project_id',
	'vname' => 'LBL_PROJECT_NAME',
	'type' => 'relate',
	'link' => 'project',
	'table' => 'project',
	'join_name' => 'project',
	'isnull' => 'true',
	'module' => 'Project',
	'dbType' => 'varchar',
	'len' => 100,
	'source' => 'non-db',
	'unified_search' => true,
	'required' => true,
	'importable' => 'required',
);

$dictionary['Document']['fields']['project_id']=array(
	'name' => 'project_id',
	'type' => 'relate',
	'dbType' => 'id',
	'rname' => 'id',
	'module' => 'Project',
	'id_name' => 'project_id',
	'reportable' => false,
	'vname' => 'LBL_PROJECT_ID',
	'audited' => true,
	'massupdate' => false,
);

$dictionary['Document']['fields']['project']=array(
	'name' => 'project',
	'type' => 'link',
	'relationship' => 'project_documents',
	'side' => 'right',
	'source' => 'non-db',
	'vname' => 'LBL_PROJECT',
);


?>