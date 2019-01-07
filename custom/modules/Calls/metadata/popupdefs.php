<?php
$popupMeta = array (
    'moduleMain' => 'Calls',
    'varName' => 'Call',
    'orderBy' => 'calls.name',
    'whereClauses' => array (
  'name' => 'calls.name',
  'tipo_c' => 'calls_cstm.tipo_c',
  'direction' => 'calls.direction',
  'accounts_calls_1_name' => 'calls.accounts_calls_1_name',
  'status' => 'calls.status',
  'date_start' => 'calls.date_start',
  'date_end' => 'calls.date_end',
  'assigned_user_id' => 'calls.assigned_user_id',
  'current_user_only' => 'calls.current_user_only',
),
    'searchInputs' => array (
  1 => 'name',
  3 => 'status',
  4 => 'tipo_c',
  5 => 'direction',
  6 => 'accounts_calls_1_name',
  7 => 'date_start',
  8 => 'date_end',
  9 => 'assigned_user_id',
  10 => 'current_user_only',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'tipo_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
    'name' => 'tipo_c',
  ),
  'direction' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_DIRECTION',
    'width' => '10%',
    'name' => 'direction',
  ),
  'accounts_calls_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_CALLS_1ACCOUNTS_IDA',
    'width' => '10%',
    'name' => 'accounts_calls_1_name',
  ),
  'status' => 
  array (
    'name' => 'status',
    'width' => '10%',
  ),
  'date_start' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE',
    'width' => '10%',
    'name' => 'date_start',
  ),
  'date_end' => 
  array (
    'type' => 'datetimecombo',
    'label' => 'LBL_DATE_END',
    'width' => '10%',
    'name' => 'date_end',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
  'current_user_only' => 
  array (
    'name' => 'current_user_only',
    'label' => 'LBL_CURRENT_USER_FILTER',
    'type' => 'bool',
    'width' => '10%',
  ),
),
    'listviewdefs' => array (
  'SET_COMPLETE' => 
  array (
    'width' => '1%',
    'label' => 'LBL_LIST_CLOSE',
    'link' => true,
    'sortable' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'status',
    ),
    'name' => 'set_complete',
  ),
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'TIPO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TIPO',
    'width' => '10%',
    'name' => 'tipo_c',
  ),
  'DIRECTION' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_DIRECTION',
    'link' => false,
    'default' => true,
    'name' => 'direction',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'ACCOUNTS_CALLS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_CALLS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'accounts_calls_1_name',
  ),
  'CONTACT_NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_CONTACT',
    'link' => true,
    'id' => 'CONTACT_ID',
    'module' => 'Contacts',
    'default' => true,
    'ACLTag' => 'CONTACT',
    'name' => 'contact_name',
  ),
  'DATE_START' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_DATE',
    'link' => false,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'time_start',
    ),
    'name' => 'date_start',
  ),
),
);
