<?php
/**
 * Created by PhpStorm.
 * User: gerard
 * Date: 18/05/18
 * Time: 11:45
 */
class ClassLH
{
    function pNombre($bean, $event, $arguments)
    {
        global $current_user;
        $name = $current_user->name.' - '.$bean->tema.' - '.$bean->prioridad;
        $bean->document_name = $name;
    }
}
?>