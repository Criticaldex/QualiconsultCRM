<?php
$dashletData['IN_ServicioDashlet']['searchFields'] = array (
  'date_entered' => 
  array (
    'default' => '',
  ),
  'diroficina_city_c' => 
  array (
    'default' => '',
  ),
  'diroficina_state_c' => 
  array (
    'default' => '',
  ),
  'assigned_user_id' => 
  array (
    'default' => '',
  ),
);
$dashletData['IN_ServicioDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'diroficina_city_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DIROFICINA_CITY',
    'width' => '10%',
  ),
  'diroficina_state_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_DIROFICINA_STATE',
    'width' => '10%',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'telefono_c' => 
  array (
    'type' => 'phone',
    'default' => false,
    'label' => 'LBL_TELEFONO',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'diroficina_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_DIROFICINA',
    'width' => '10%',
  ),
  'email_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_EMAIL',
    'width' => '10%',
  ),
);
