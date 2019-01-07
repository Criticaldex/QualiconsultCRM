<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-05-25 11:26:17
$dictionary['Account']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2018-06-28 16:11:26
$dictionary['Account']['fields']['comunidades_c']['inline_edit']='1';
$dictionary['Account']['fields']['comunidades_c']['labelValue']='Comunidad';

 

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


 // created: 2018-06-28 16:01:30
$dictionary['Account']['fields']['segmento_c']['inline_edit']='1';
$dictionary['Account']['fields']['segmento_c']['labelValue']='Segmento';

 

 // created: 2018-06-28 16:04:08
$dictionary['Account']['fields']['sector_c']['inline_edit']='1';
$dictionary['Account']['fields']['sector_c']['labelValue']='Sector';

 

 // created: 2018-05-25 11:26:17
$dictionary['Account']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-05-25 11:26:17
$dictionary['Account']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-05-25 11:26:17
$dictionary['Account']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

// created: 2018-05-25 12:25:42
$dictionary["Account"]["fields"]["accounts_meetings_1"] = array (
  'name' => 'accounts_meetings_1',
  'type' => 'link',
  'relationship' => 'accounts_meetings_1',
  'source' => 'non-db',
  'module' => 'Meetings',
  'bean_name' => 'Meeting',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_MEETINGS_1_FROM_MEETINGS_TITLE',
);


// created: 2018-05-25 12:28:06
$dictionary["Account"]["fields"]["accounts_calls_1"] = array (
  'name' => 'accounts_calls_1',
  'type' => 'link',
  'relationship' => 'accounts_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_CALLS_TITLE',
);

?>