<?php
$popupMeta = array (
    'moduleMain' => 'Contact',
    'varName' => 'CONTACT',
    'orderBy' => 'contacts.first_name, contacts.last_name',
    'whereClauses' => array (
  'first_name' => 'contacts.first_name',
  'last_name' => 'contacts.last_name',
  'account_name' => 'accounts.name',
  'title' => 'contacts.title',
  'email' => 'contacts.email',
  'phone_work' => 'contacts.phone_work',
),
    'searchInputs' => array (
  0 => 'first_name',
  1 => 'last_name',
  2 => 'account_name',
  3 => 'email',
  4 => 'title',
  5 => 'phone_work',
),
    'create' => array (
  'formBase' => 'ContactFormBase.php',
  'formBaseClass' => 'ContactFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'ContactSave',
  ),
  'createButton' => 'LNK_NEW_CONTACT',
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
  'title' => 
  array (
    'name' => 'title',
    'width' => '10%',
  ),
  'account_name' => 
  array (
    'name' => 'account_name',
    'type' => 'varchar',
    'width' => '10%',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10%',
  ),
  'phone_work' => 
  array (
    'type' => 'phone',
    'label' => 'LBL_OFFICE_PHONE',
    'width' => '10%',
    'name' => 'phone_work',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '20%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'related_fields' => 
    array (
      0 => 'first_name',
      1 => 'last_name',
      2 => 'salutation',
      3 => 'account_name',
      4 => 'account_id',
    ),
    'name' => 'name',
  ),
  'TITLE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LIST_TITLE',
    'default' => true,
    'name' => 'title',
  ),
  'ACCOUNT_NAME' => 
  array (
    'width' => '25%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'module' => 'Accounts',
    'id' => 'ACCOUNT_ID',
    'default' => true,
    'sortable' => true,
    'ACLTag' => 'ACCOUNT',
    'related_fields' => 
    array (
      0 => 'account_id',
    ),
    'name' => 'account_name',
  ),
  'EMAIL1' => 
  array (
    'type' => 'varchar',
    'studio' => 
    array (
      'editview' => true,
      'editField' => true,
      'searchview' => false,
      'popupsearch' => false,
    ),
    'label' => 'LBL_EMAIL_ADDRESS',
    'width' => '10%',
    'default' => true,
    'name' => 'email1',
  ),
  'LEAD_SOURCE' => 
  array (
    'width' => '15%',
    'label' => 'LBL_LEAD_SOURCE',
    'default' => true,
    'name' => 'lead_source',
  ),
),
);
