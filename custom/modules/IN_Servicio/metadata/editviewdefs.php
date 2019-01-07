<?php
$module_name = 'IN_Servicio';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
      'syncDetailEditViews' => true,
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
            'name' => 'direccion_c',
            'label' => 'LBL_DIRECCION',
          ),
          1 => 
          array (
            'name' => 'ciudad_c',
            'label' => 'LBL_CIUDAD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'comunidades_c',
            'studio' => 'visible',
            'label' => 'LBL_COMUNIDADES',
          ),
          1 => 
          array (
            'name' => 'cp_c',
            'label' => 'LBL_CP',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tlf_c',
            'label' => 'LBL_TLF',
          ),
          1 => 
          array (
            'name' => 'mail_c',
            'label' => 'LBL_MAIL',
          ),
        ),
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
