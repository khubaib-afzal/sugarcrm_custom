<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/SugarQuery/SugarQuery.php');

class ClosedWonApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            //GET
            'MyGetEndpoint' => array(
                //request type
                'reqType' => 'GET',

                //set authentication
                'noLoginRequired' => false,

                //endpoint path
                'path' => array('customApi', 'getClosedWon'),

                //endpoint variables
                'pathVars' => array('', '', 'data'),

                //method to call
                'method' => 'MyGetMethod',

                //short help string to be displayed in the help documentation
                'shortHelp' => 'An example of a GET endpoint',

                //long help to be displayed in the help documentation
                //'longHelp' => 'custom/clients/base/api/help/MyEndPoint_MyGetEndPoint_help.html',
            ),
        );
    }

    /**
     * Method to be used for my MyEndpoint/GetExample endpoint
     */
    public function MyGetMethod($api, $args)
    {
        $query = new SugarQuery();
        $query->select('name', 'description', 'date_closed');
        $query->from(BeanFactory::newBean('Opportunities'));
        $query->Where()->equals('sales_stage', 'Closed Won');

        $result = $query->execute();

        if (count($result) == 0) {
            return null;
        }
        return $result;
    }

}

?>