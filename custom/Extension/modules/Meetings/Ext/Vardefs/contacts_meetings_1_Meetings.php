<?php
// created: 2018-05-28 11:46:59
$dictionary["Meeting"]["fields"]["contacts_meetings_1"] = array (
  'name' => 'contacts_meetings_1',
  'type' => 'link',
  'relationship' => 'contacts_meetings_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_MEETINGS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_meetings_1contacts_ida',
);
$dictionary["Meeting"]["fields"]["contacts_meetings_1_name"] = array (
  'name' => 'contacts_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_MEETINGS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_meetings_1contacts_ida',
  'link' => 'contacts_meetings_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Meeting"]["fields"]["contacts_meetings_1contacts_ida"] = array (
  'name' => 'contacts_meetings_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_meetings_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_MEETINGS_1_FROM_MEETINGS_TITLE',
);
