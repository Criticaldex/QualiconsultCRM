<?php
$dashletData['AccountsDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'date_entered' => 
  array (
    'default' => '',
  ),
  'comunidades_c' => 
  array (
    'default' => '',
  ),
  'shipping_address_city' => 
  array (
    'default' => '',
  ),
  'shipping_address_postalcode' => 
  array (
    'default' => '',
  ),
  'segmento_c' => 
  array (
    'default' => '',
  ),
  'jjwg_maps_address_c' => 
  array (
    'default' => '',
  ),
  'description' => 
  array (
    'default' => '',
  ),
);
$dashletData['AccountsDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'comunidades_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_COMUNIDADES',
    'width' => '10%',
  ),
  'shipping_address_city' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_CITY',
    'name' => 'shipping_address_city',
    'default' => true,
  ),
  'segmento_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_SEGMENTO',
    'width' => '10%',
  ),
  'shipping_address_country' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
    'name' => 'shipping_address_country',
    'default' => false,
  ),
  'jjwg_maps_address_c' => 
  array (
    'type' => 'varchar',
    'default' => false,
    'label' => 'LBL_JJWG_MAPS_ADDRESS',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => false,
  ),
  'shipping_address_postalcode' => 
  array (
    'width' => '8%',
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'name' => 'shipping_address_postalcode',
    'default' => false,
  ),
);
