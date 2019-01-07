<?php
// created: 2018-07-05 15:23:30
$dictionary["OF_oferta"]["fields"]["of_oferta_meetings_1"] = array (
  'name' => 'of_oferta_meetings_1',
  'type' => 'link',
  'relationship' => 'of_oferta_meetings_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'vname' => 'LBL_OF_OFERTA_MEETINGS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'of_oferta_meetings_1meetings_idb',
);
$dictionary["OF_oferta"]["fields"]["of_oferta_meetings_1_name"] = array (
  'name' => 'of_oferta_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OF_OFERTA_MEETINGS_1_FROM_MEETINGS_TITLE',
  'save' => true,
  'id_name' => 'of_oferta_meetings_1meetings_idb',
  'link' => 'of_oferta_meetings_1',
  'table' => 'meetings',
  'module' => 'Meetings',
  'rname' => 'name',
);
$dictionary["OF_oferta"]["fields"]["of_oferta_meetings_1meetings_idb"] = array (
  'name' => 'of_oferta_meetings_1meetings_idb',
  'type' => 'link',
  'relationship' => 'of_oferta_meetings_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_OF_OFERTA_MEETINGS_1_FROM_MEETINGS_TITLE',
);
