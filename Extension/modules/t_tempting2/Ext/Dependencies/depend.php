<?php

$dependencies['t_tempting2']['depend_1'] = array(
    'hooks' => array("edit"),
    //Trigger formula for the dependency. Defaults to 'true'.
    'trigger' => 'true',
    'triggerFields' => array('aplha_c'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetRequired', //Action type
            //The parameters passed in depend on the action type
            'params' => array(
                'target' => 'delta_c',
                'label'  => 'LBL_DELTA', //normally <field>_label
                'value' => 'equal($aplha_c, "Closed")', //Formula
            ),
        ),
    ),
);