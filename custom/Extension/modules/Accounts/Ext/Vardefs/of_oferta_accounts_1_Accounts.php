<?php
// created: 2018-07-05 16:53:48
$dictionary["Account"]["fields"]["of_oferta_accounts_1"] = array (
  'name' => 'of_oferta_accounts_1',
  'type' => 'link',
  'relationship' => 'of_oferta_accounts_1',
  'source' => 'non-db',
  'module' => 'OF_oferta',
  'bean_name' => 'OF_oferta',
  'vname' => 'LBL_OF_OFERTA_ACCOUNTS_1_FROM_OF_OFERTA_TITLE',
  'id_name' => 'of_oferta_accounts_1of_oferta_ida',
);
$dictionary["Account"]["fields"]["of_oferta_accounts_1_name"] = array (
  'name' => 'of_oferta_accounts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OF_OFERTA_ACCOUNTS_1_FROM_OF_OFERTA_TITLE',
  'save' => true,
  'id_name' => 'of_oferta_accounts_1of_oferta_ida',
  'link' => 'of_oferta_accounts_1',
  'table' => 'of_oferta',
  'module' => 'OF_oferta',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["of_oferta_accounts_1of_oferta_ida"] = array (
  'name' => 'of_oferta_accounts_1of_oferta_ida',
  'type' => 'link',
  'relationship' => 'of_oferta_accounts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_OF_OFERTA_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);
