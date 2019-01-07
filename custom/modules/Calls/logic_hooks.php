<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['process_record'] = Array(); 
$hook_array['process_record'][] = Array(1, 'count', 'modules/Calls_Reschedule/reschedule_count.php','reschedule_count', 'count');
$hook_array['before_save'][] = Array(3, 'ponerNombre','custom/modules/Calls/Logic_hooks/LH.php','ClassLH','pNombre');
$hook_array['before_save'][] = Array(2, 'ponerEmpresa','custom/modules/Calls/Logic_hooks/LH.php','ClassLH','pEmpresa');


?>