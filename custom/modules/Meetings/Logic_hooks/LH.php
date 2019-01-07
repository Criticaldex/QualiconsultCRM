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
        $fi = $bean->date_start;
        $time = strtotime($fi);
        $time += 7200;
        $fecha = date( 'Y/m/d H:i', $time);
        $bean->name = ($fecha.' - '.$bean->accounts_meetings_1_name);
    }

    function pEmpresa($bean, $event, $arguments)
    {
            $con = $bean->contacts_meetings_1contacts_ida;
            $a = BeanFactory::getBean('Contacts', $con);
        if ($bean->accounts_meetings_1accounts_ida != $a->account_id) {
            $bean->accounts_meetings_1accounts_ida = $a->account_id;
            $bean->accounts_meetings_1_name = $a->account_name;

            $meeting_id = $bean->save(); // will return last insert id
            $account_id = $a->account_id;
            $dataset = array(
                'account_id' => $account_id,
                'meetings_id' => $meeting_id,
            );

            $bean->set_relationship('accounts_meetings_1_c', array(), false, false, $dataset);
        }

    }

    function pDireccion($bean, $event, $arguments)
    {
        if ($bean->direccion_c == '') {
            $ide = $bean->contacts_meetings_1contacts_ida;
            $a = BeanFactory::getBean('Contacts', $ide);
            $bean->direccion_c = $a->jjwg_maps_address_c;
            $bean->direccion_city_c = $a->primary_address_city;
            $bean->comunidad_c = $a->comunidad_c;
        }
    }
}
?>