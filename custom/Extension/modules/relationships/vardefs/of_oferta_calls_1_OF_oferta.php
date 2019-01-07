<?php
// created: 2018-07-05 15:23:46
$dictionary["OF_oferta"]["fields"]["of_oferta_calls_1"] = array (
  'name' => 'of_oferta_calls_1',
  'type' => 'link',
  'relationship' => 'of_oferta_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_OF_OFERTA_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => 'of_oferta_calls_1calls_idb',
);
$dictionary["OF_oferta"]["fields"]["of_oferta_calls_1_name"] = array (
  'name' => 'of_oferta_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OF_OFERTA_CALLS_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'of_oferta_calls_1calls_idb',
  'link' => 'of_oferta_calls_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["OF_oferta"]["fields"]["of_oferta_calls_1calls_idb"] = array (
  'name' => 'of_oferta_calls_1calls_idb',
  'type' => 'link',
  'relationship' => 'of_oferta_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OF_OFERTA_CALLS_1_FROM_CALLS_TITLE',
);
