<?php
// created: 2018-05-25 12:25:42
$dictionary["Meeting"]["fields"]["accounts_meetings_1"] = array (
  'name' => 'accounts_meetings_1',
  'type' => 'link',
  'relationship' => 'accounts_meetings_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_MEETINGS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_meetings_1accounts_ida',
);
$dictionary["Meeting"]["fields"]["accounts_meetings_1_name"] = array (
  'name' => 'accounts_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MEETINGS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_meetings_1accounts_ida',
  'link' => 'accounts_meetings_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["accounts_meetings_1accounts_ida"] = array (
  'name' => 'accounts_meetings_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_meetings_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_MEETINGS_1_FROM_MEETINGS_TITLE',
);
