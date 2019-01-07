<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['after_save'] = Array(); 
$hook_array['after_save'][] = Array(77, 'updateMeetingGeocodeInfo', 'modules/Meetings/MeetingsJjwg_MapsLogicHook.php','MeetingsJjwg_MapsLogicHook', 'updateMeetingGeocodeInfo');
$hook_array['before_save'][] = Array(4, 'ponerNombre','custom/modules/Meetings/Logic_hooks/LH.php','ClassLH','pNombre');
$hook_array['before_save'][] = Array(2, 'ponerEmpresa','custom/modules/Meetings/Logic_hooks/LH.php','ClassLH','pEmpresa');
$hook_array['before_save'][] = Array(3, 'ponerDireccion','custom/modules/Meetings/Logic_hooks/LH.php','ClassLH','pDireccion');


?>