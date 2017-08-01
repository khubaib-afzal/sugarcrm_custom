<?php

echo "In AVMap<br>";

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class t_tempting2ViewExample extends ViewDetail
{
    function t_tempting2ViewExample()
    {
        parent::ViewDetail();
    }
    function display()
    {
        echo 'Action View Map Example<br>';
        parent::display();
    }
}

$temp = new t_tempting2ViewExample();
$temp->display();

?>