<?php
// created: 2018-07-05 15:23:46
$dictionary["of_oferta_calls_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'of_oferta_calls_1' => 
    array (
      'lhs_module' => 'OF_oferta',
      'lhs_table' => 'of_oferta',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'of_oferta_calls_1_c',
      'join_key_lhs' => 'of_oferta_calls_1of_oferta_ida',
      'join_key_rhs' => 'of_oferta_calls_1calls_idb',
    ),
  ),
  'table' => 'of_oferta_calls_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'of_oferta_calls_1of_oferta_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'of_oferta_calls_1calls_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'of_oferta_calls_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'of_oferta_calls_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'of_oferta_calls_1of_oferta_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'of_oferta_calls_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'of_oferta_calls_1calls_idb',
      ),
    ),
  ),
);