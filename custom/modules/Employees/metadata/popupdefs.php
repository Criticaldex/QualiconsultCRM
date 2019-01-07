<?php
$popupMeta = array (
    'moduleMain' => 'Employees',
    'varName' => 'Employee',
    'orderBy' => 'employees.first_name, employees.last_name',
    'whereClauses' => array (
  'first_name' => 'employees.first_name',
  'last_name' => 'employees.last_name',
  'funcion_c' => 'employees_cstm.funcion_c',
  'in_servicio_users_1_name' => 'employees.in_servicio_users_1_name',
  'employee_status' => 'employees.employee_status',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'funcion_c',
  3 => 'in_servicio_users_1_name',
  4 => 'employee_status',
),
    'searchdefs' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'width' => '10%',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'width' => '10%',
  ),
  'funcion_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_FUNCION',
    'width' => '10%',
    'name' => 'funcion_c',
  ),
  'in_servicio_users_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_IN_SERVICIO_USERS_1_FROM_IN_SERVICIO_TITLE',
    'id' => 'IN_SERVICIO_USERS_1IN_SERVICIO_IDA',
    'width' => '10%',
    'name' => 'in_servicio_users_1_name',
  ),
  'employee_status' => 
  array (
    'name' => 'employee_status',
    'width' => '10%',
  ),
),
);
