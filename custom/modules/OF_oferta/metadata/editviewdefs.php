<?php
$module_name = 'OF_oferta';
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
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'equaliperf_c',
            'label' => 'LBL_EQUALIPERF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'of_oferta_meetings_1_name',
            'label' => 'LBL_OF_OFERTA_MEETINGS_1_FROM_MEETINGS_TITLE',
          ),
          1 => 
          array (
            'name' => 'of_oferta_calls_1_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'estado_c',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
          1 => 
          array (
            'name' => 'importe_c',
            'label' => 'LBL_IMPORTE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'extension_c',
            'studio' => 'visible',
            'label' => 'LBL_EXTENSION',
          ),
          1 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
