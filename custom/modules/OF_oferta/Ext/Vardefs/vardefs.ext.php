<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-07-05 15:02:46
$dictionary['OF_oferta']['fields']['cqualiperf_c']['inline_edit']='1';
$dictionary['OF_oferta']['fields']['cqualiperf_c']['labelValue']='LBL_CQUALIPERF';

 

 // created: 2018-07-05 15:05:01
$dictionary['OF_oferta']['fields']['serviciocontrata_c']['inline_edit']='1';
$dictionary['OF_oferta']['fields']['serviciocontrata_c']['labelValue']='LBL_SERVICIOCONTRATA';

 

 // created: 2018-07-05 15:02:41
$dictionary['OF_oferta']['fields']['equaliperf_c']['inline_edit']='1';
$dictionary['OF_oferta']['fields']['equaliperf_c']['labelValue']='LBL_EQUALIPERF';

 

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


 // created: 2018-07-05 15:03:47
$dictionary['OF_oferta']['fields']['extension_c']['inline_edit']='1';
$dictionary['OF_oferta']['fields']['extension_c']['labelValue']='LBL_EXTENSION';

 

 // created: 2018-07-05 15:04:50
$dictionary['OF_oferta']['fields']['importe_c']['inline_edit']='1';
$dictionary['OF_oferta']['fields']['importe_c']['labelValue']='LBL_IMPORTE';

 

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


// created: 2018-07-05 16:53:48
$dictionary["OF_oferta"]["fields"]["of_oferta_accounts_1"] = array (
  'name' => 'of_oferta_accounts_1',
  'type' => 'link',
  'relationship' => 'of_oferta_accounts_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_OF_OFERTA_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
);


 // created: 2018-07-05 15:04:33
$dictionary['OF_oferta']['fields']['estado_c']['inline_edit']='1';
$dictionary['OF_oferta']['fields']['estado_c']['labelValue']='LBL_ESTADO';

 
?>