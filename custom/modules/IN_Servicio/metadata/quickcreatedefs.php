<?php
$module_name = 'IN_Servicio';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'diroficina_c',
            'label' => 'LBL_DIROFICINA',
          ),
          1 => 
          array (
            'name' => 'diroficina_city_c',
            'label' => 'LBL_DIROFICINA_CITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'diroficina_state_c',
            'label' => 'LBL_DIROFICINA_STATE',
          ),
          1 => 
          array (
            'name' => 'diroficina_postalcode_c',
            'label' => 'LBL_DIROFICINA_POSTALCODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email_c',
            'label' => 'LBL_EMAIL',
          ),
          1 => 
          array (
            'name' => 'telefono_c',
            'label' => 'LBL_TELEFONO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
