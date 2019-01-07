<?php
// created: 2018-07-05 16:53:48
$dictionary["of_oferta_accounts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'of_oferta_accounts_1' => 
    array (
      'lhs_module' => 'OF_oferta',
      'lhs_table' => 'of_oferta',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'of_oferta_accounts_1_c',
      'join_key_lhs' => 'of_oferta_accounts_1of_oferta_ida',
      'join_key_rhs' => 'of_oferta_accounts_1accounts_idb',
    ),
  ),
  'table' => 'of_oferta_accounts_1_c',
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
      'name' => 'of_oferta_accounts_1of_oferta_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'of_oferta_accounts_1accounts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'of_oferta_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'of_oferta_accounts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'of_oferta_accounts_1of_oferta_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'of_oferta_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'of_oferta_accounts_1accounts_idb',
      ),
    ),
  ),
);