<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'comunidades_c' => 'accounts_cstm.comunidades_c',
  'shipping_address_city' => 'accounts.shipping_address_city',
  'segmento_c' => 'accounts_cstm.segmento_c',
),
    'searchInputs' => array (
  0 => 'name',
  9 => 'comunidades_c',
  10 => 'shipping_address_city',
  11 => 'segmento_c',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'comunidades_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_COMUNIDADES',
    'width' => '10%',
    'name' => 'comunidades_c',
  ),
  'shipping_address_city' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'width' => '10%',
    'name' => 'shipping_address_city',
  ),
  'segmento_c' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_SEGMENTO',
    'width' => '10%',
    'name' => 'segmento_c',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'COMUNIDADES_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COMUNIDADES',
    'width' => '10%',
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => '10%',
    'label' => 'LBL_LIST_CITY',
    'default' => true,
    'name' => 'billing_address_city',
  ),
  'SEGMENTO_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SEGMENTO',
    'width' => '10%',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
),
);
