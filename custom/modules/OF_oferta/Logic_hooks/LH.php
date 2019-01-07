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
        $bean->name = ($bean->accounts_of_oferta_1_name.' - '.$bean->serviciocontrata_c);
    }

    function pEmpresa($bean, $event, $arguments)
    {
        //$bean->save();
        if ($bean->of_oferta_meetings_1meetings_idb!=NULL){
            $mee = $bean->of_oferta_meetings_1meetings_idb;
            $a = BeanFactory::getBean('Meetings', $mee);
            if ($bean->accounts_of_oferta_1accounts_ida != $a->accounts_meetings_1accounts_ida) {
                $bean->accounts_of_oferta_1accounts_ida = $a->accounts_meetings_1accounts_ida;
                $bean->accounts_of_oferta_1_name = $a->accounts_meetings_1_name;

                $oferta_id = $bean->save(); // will return last insert id
                $account_id = $a->accounts_meetings_1accounts_ida;
                $dataset = array(
                    'account_id' => $account_id,
                    'oferta_id' => $oferta_id,
                );
                $bean->set_relationship('accounts_of_oferta_1_c', array(), false, false, $dataset);
            }
        }else if ($bean->of_oferta_calls_1calls_idb!=NULL) {
            var_dump($bean->name);
            $call = $bean->of_oferta_calls_1calls_idb;
            $a = BeanFactory::getBean('Calls', $call);
            if ($bean->accounts_of_oferta_1accounts_ida != $a->accounts_calls_1accounts_ida) {
                $bean->accounts_of_oferta_1accounts_ida = $a->accounts_calls_1accounts_ida;

                $call_id = $bean->save(); // will return last insert id
                $dataset = array(
                    'account_id' => $a->accounts_calls_1accounts_ida,
                    'call_id' => $call_id,
                );
                $bean->set_relationship('accounts_of_oferta_1_c', array(), false, false, $dataset);
            }
        }
    }
}
?>