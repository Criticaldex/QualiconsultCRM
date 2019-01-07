<?php
// created: 2018-07-05 15:23:46
$dictionary["Call"]["fields"]["of_oferta_calls_1"] = array (
  'name' => 'of_oferta_calls_1',
  'type' => 'link',
  'relationship' => 'of_oferta_calls_1',
  'source' => 'non-db',
  'module' => 'OF_oferta',
  'bean_name' => 'OF_oferta',
  'vname' => 'LBL_OF_OFERTA_CALLS_1_FROM_OF_OFERTA_TITLE',
  'id_name' => 'of_oferta_calls_1of_oferta_ida',
);
$dictionary["Call"]["fields"]["of_oferta_calls_1_name"] = array (
  'name' => 'of_oferta_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OF_OFERTA_CALLS_1_FROM_OF_OFERTA_TITLE',
  'save' => true,
  'id_name' => 'of_oferta_calls_1of_oferta_ida',
  'link' => 'of_oferta_calls_1',
  'table' => 'of_oferta',
  'module' => 'OF_oferta',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["of_oferta_calls_1of_oferta_ida"] = array (
  'name' => 'of_oferta_calls_1of_oferta_ida',
  'type' => 'link',
  'relationship' => 'of_oferta_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OF_OFERTA_CALLS_1_FROM_OF_OFERTA_TITLE',
);
