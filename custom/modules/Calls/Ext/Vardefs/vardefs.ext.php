<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-05-31 09:58:40
$dictionary['Call']['fields']['direction']['default']='Outbound';
$dictionary['Call']['fields']['direction']['inline_edit']=true;
$dictionary['Call']['fields']['direction']['comments']='Indicates whether call is inbound or outbound';
$dictionary['Call']['fields']['direction']['merge_filter']='disabled';

 

 // created: 2018-06-28 15:46:53
$dictionary['Call']['fields']['user_id_c']['inline_edit']=1;

 

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


// created: 2018-05-25 12:28:06
$dictionary["Call"]["fields"]["accounts_calls_1"] = array (
  'name' => 'accounts_calls_1',
  'type' => 'link',
  'relationship' => 'accounts_calls_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_calls_1accounts_ida',
);
$dictionary["Call"]["fields"]["accounts_calls_1_name"] = array (
  'name' => 'accounts_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_calls_1accounts_ida',
  'link' => 'accounts_calls_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["accounts_calls_1accounts_ida"] = array (
  'name' => 'accounts_calls_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_CALLS_TITLE',
);


 // created: 2018-05-28 09:20:15
$dictionary['Call']['fields']['tipo_c']['inline_edit']='1';
$dictionary['Call']['fields']['tipo_c']['labelValue']='Tipo';

 

 // created: 2018-06-28 15:46:53
$dictionary['Call']['fields']['colaborador_c']['inline_edit']='1';
$dictionary['Call']['fields']['colaborador_c']['labelValue']='Colaborador';

 

// created: 2018-05-30 12:32:43
$dictionary["Call"]["fields"]["contacts_calls_1"] = array (
  'name' => 'contacts_calls_1',
  'type' => 'link',
  'relationship' => 'contacts_calls_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_CONTACTS_CALLS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_calls_1contacts_ida',
);
$dictionary["Call"]["fields"]["contacts_calls_1_name"] = array (
  'name' => 'contacts_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_CALLS_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_calls_1contacts_ida',
  'link' => 'contacts_calls_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Call"]["fields"]["contacts_calls_1contacts_ida"] = array (
  'name' => 'contacts_calls_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_calls_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_CALLS_1_FROM_CALLS_TITLE',
);


 // created: 2018-06-28 15:41:42
$dictionary['Call']['fields']['tipoc_c']['inline_edit']='1';
$dictionary['Call']['fields']['tipoc_c']['labelValue']='Tipo';

 
?>