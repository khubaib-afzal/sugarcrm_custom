<?php

require_once('clients/base/filters/operators/operators.php');

$viewdefs['base']['filter']['operators']['Newtype'] = array(
    '$contains' => 'LBL_NEWTYPE_OPERATOR_CONTAINS',
    '$not_contains' => 'LBL_NEWTYPE_OPERATOR_NOT_CONTAINS',
    '$starts' => 'LBL_NEWTYPE_OPERATOR_STARTS_WITH',
);