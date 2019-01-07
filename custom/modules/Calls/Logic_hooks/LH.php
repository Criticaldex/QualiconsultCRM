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
        $bean->name = ($fecha.' - '.$bean->accounts_calls_1_name);
    }

    function pEmpresa($bean, $event, $arguments)
    {
        $con = $bean->contacts_calls_1contacts_ida;
        $a = BeanFactory::getBean('Contacts', $con);
        if ($bean->accounts_calls_1accounts_ida != $a->account_id) {
            $bean->accounts_calls_1accounts_ida = $a->account_id;
            $bean->accounts_calls_1_name = $a->account_name;

            $call_id = $bean->save(); // will return last insert id
            $account_id = $a->account_id;
            $dataset = array(
                'account_id' => $account_id,
                'meetings_id' => $call_id,
            );
            $bean->set_relationship('accounts_calls_1_c', array(), false, false, $dataset);
        }
    }
}
?>