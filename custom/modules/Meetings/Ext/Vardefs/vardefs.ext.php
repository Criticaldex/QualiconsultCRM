<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-06-28 16:19:04
$dictionary['Meeting']['fields']['serviciocontrata_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['serviciocontrata_c']['labelValue']='Servicio que contrata';

 

 // created: 2018-06-28 16:19:33
$dictionary['Meeting']['fields']['fuente_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['fuente_c']['labelValue']='Fuente';

 

 // created: 2018-06-28 16:20:56
$dictionary['Meeting']['fields']['necesidades_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['necesidades_c']['labelValue']='Necesidades';

 

 // created: 2018-05-28 10:48:10
$dictionary['Meeting']['fields']['direccion_country_c']['inline_edit']=1;

 

 // created: 2018-06-28 16:20:43
$dictionary['Meeting']['fields']['proveedor_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['proveedor_c']['labelValue']='Proveedor';

 

 // created: 2018-05-28 10:58:07
$dictionary['Meeting']['fields']['direccion_postalcode_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['direccion_postalcode_c']['labelValue']='Codigo postal';

 

 // created: 2018-06-28 16:55:33
$dictionary['Meeting']['fields']['direccion_city_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['direccion_city_c']['labelValue']='Ciudad';

 

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


 // created: 2018-06-28 16:56:56
$dictionary['Meeting']['fields']['comunidad_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['comunidad_c']['labelValue']='Comunidad';

 

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


 // created: 2018-06-28 16:55:07
$dictionary['Meeting']['fields']['direccion_c']['inline_edit']='1';
$dictionary['Meeting']['fields']['direccion_c']['labelValue']='Direccion';

 

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

?>