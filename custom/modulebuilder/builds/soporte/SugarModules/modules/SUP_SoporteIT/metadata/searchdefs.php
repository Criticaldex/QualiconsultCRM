<?php
$module_name = 'SUP_SoporteIT';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'document_name' => 
      array (
        'name' => 'document_name',
        'default' => true,
        'width' => '10%',
      ),
      'tema' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TEMA',
        'width' => '10%',
        'default' => true,
        'name' => 'tema',
      ),
      'exp_date' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DOC_EXP_DATE',
        'width' => '10%',
        'default' => true,
        'name' => 'exp_date',
      ),
      'prioridad' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PRIORIDAD',
        'width' => '10%',
        'default' => true,
        'name' => 'prioridad',
      ),
      'estado' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_ESTADO',
        'width' => '10%',
        'default' => true,
        'name' => 'estado',
      ),
      'assigned_user_name' => 
      array (
        'link' => true,
        'type' => 'relate',
        'label' => 'LBL_ASSIGNED_TO_NAME',
        'id' => 'ASSIGNED_USER_ID',
        'width' => '10%',
        'default' => true,
        'name' => 'assigned_user_name',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 'document_name',
      1 => 'category_id',
      2 => 'subcategory_id',
      3 => 'active_date',
      4 => 'exp_date',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
