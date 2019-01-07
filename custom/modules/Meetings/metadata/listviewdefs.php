<?php
$listViewDefs ['Meetings'] = 
array (
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
  ),
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_SUBJECT',
    'link' => true,
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '2%',
    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'ACCOUNTS_MEETINGS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_ACCOUNTS_MEETINGS_1_FROM_ACCOUNTS_TITLE',
    'id' => 'ACCOUNTS_MEETINGS_1ACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'CONTACTS_MEETINGS_1_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CONTACTS_MEETINGS_1_FROM_CONTACTS_TITLE',
    'id' => 'CONTACTS_MEETINGS_1CONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'COMUNIDAD_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COMUNIDAD',
    'width' => '10%',
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
  ),
  'DIRECTION' => 
  array (
    'type' => 'enum',
    'label' => 'LBL_LIST_DIRECTION',
    'width' => '10%',
    'default' => false,
  ),
  'STATUS' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_STATUS',
    'link' => false,
    'default' => false,
  ),
);
;
?>
