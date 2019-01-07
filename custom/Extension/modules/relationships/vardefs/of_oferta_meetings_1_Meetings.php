<?php
// created: 2018-07-05 15:23:30
$dictionary["Meeting"]["fields"]["of_oferta_meetings_1"] = array (
  'name' => 'of_oferta_meetings_1',
  'type' => 'link',
  'relationship' => 'of_oferta_meetings_1',
  'source' => 'non-db',
  'module' => 'OF_oferta',
  'bean_name' => 'OF_oferta',
  'vname' => 'LBL_OF_OFERTA_MEETINGS_1_FROM_OF_OFERTA_TITLE',
  'id_name' => 'of_oferta_meetings_1of_oferta_ida',
);
$dictionary["Meeting"]["fields"]["of_oferta_meetings_1_name"] = array (
  'name' => 'of_oferta_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OF_OFERTA_MEETINGS_1_FROM_OF_OFERTA_TITLE',
  'save' => true,
  'id_name' => 'of_oferta_meetings_1of_oferta_ida',
  'link' => 'of_oferta_meetings_1',
  'table' => 'of_oferta',
  'module' => 'OF_oferta',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["of_oferta_meetings_1of_oferta_ida"] = array (
  'name' => 'of_oferta_meetings_1of_oferta_ida',
  'type' => 'link',
  'relationship' => 'of_oferta_meetings_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OF_OFERTA_MEETINGS_1_FROM_OF_OFERTA_TITLE',
);
