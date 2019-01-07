<?php
// created: 2018-05-28 08:19:08
$dictionary["User"]["fields"]["in_servicio_users_1"] = array (
  'name' => 'in_servicio_users_1',
  'type' => 'link',
  'relationship' => 'in_servicio_users_1',
  'source' => 'non-db',
  'module' => 'IN_Servicio',
  'bean_name' => 'IN_Servicio',
  'vname' => 'LBL_IN_SERVICIO_USERS_1_FROM_IN_SERVICIO_TITLE',
  'id_name' => 'in_servicio_users_1in_servicio_ida',
);
$dictionary["User"]["fields"]["in_servicio_users_1_name"] = array (
  'name' => 'in_servicio_users_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_IN_SERVICIO_USERS_1_FROM_IN_SERVICIO_TITLE',
  'save' => true,
  'id_name' => 'in_servicio_users_1in_servicio_ida',
  'link' => 'in_servicio_users_1',
  'table' => 'in_servicio',
  'module' => 'IN_Servicio',
  'rname' => 'name',
);
$dictionary["User"]["fields"]["in_servicio_users_1in_servicio_ida"] = array (
  'name' => 'in_servicio_users_1in_servicio_ida',
  'type' => 'link',
  'relationship' => 'in_servicio_users_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_IN_SERVICIO_USERS_1_FROM_USERS_TITLE',
);
