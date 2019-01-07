<?php
$module_name = 'SUP_SoporteIT';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'hidden' => 
        array (
        ),
      ),
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
      'javascript' => '{sugar_getscript file="include/javascript/popup_parent_helper.js"}
	{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
	{sugar_getscript file="modules/Documents/documents.js"}',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
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
            'name' => 'document_name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'active_date',
            'label' => 'LBL_DOC_ACTIVE_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tema',
            'studio' => 'visible',
            'label' => 'LBL_TEMA',
          ),
          1 => 'exp_date',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'imagen',
            'studio' => 'visible',
            'label' => 'LBL_IMAGEN',
          ),
          1 => 
          array (
            'name' => 'uploadfile',
            'displayParams' => 
            array (
              'onchangeSetFileNameTo' => 'document_name',
            ),
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'prioridad',
            'studio' => 'visible',
            'label' => 'LBL_PRIORIDAD',
          ),
          1 => 
          array (
            'name' => 'estado',
            'studio' => 'visible',
            'label' => 'LBL_ESTADO',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'respuesta',
            'label' => 'LBL_RESPUESTA',
          ),
        ),
      ),
    ),
  ),
);
;
?>
