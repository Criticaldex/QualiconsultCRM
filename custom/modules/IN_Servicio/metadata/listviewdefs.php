<?php
$module_name = 'IN_Servicio';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CIUDAD_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_CIUDAD',
    'width' => '10%',
  ),
  'COMUNIDADES_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COMUNIDADES',
    'width' => '10%',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TELEFONO_C' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TELEFONO',
    'width' => '10%',
  ),
  'EMAIL_C' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EMAIL',
    'width' => '10%',
  ),
);
;
?>
