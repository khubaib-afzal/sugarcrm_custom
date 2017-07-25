<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['t_id_mod2'] = array(
    'table' => 't_id_mod2',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'first_name' => 
  array (
    'name' => 'first_name',
    'vname' => 'LBL_FIRST_NAME',
    'type' => 'varchar',
    'len' => '100',
    'unified_search' => true,
    'duplicate_on_record_copy' => 'always',
    'full_text_search' => 
    array (
      'enabled' => true,
      'boost' => '1.81',
      'searchable' => true,
    ),
    'comment' => 'First name of the contact',
    'merge_filter' => 'disabled',
    'required' => true,
    'massupdate' => false,
    'default' => '',
    'no_default' => false,
    'comments' => 'First name of the contact',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'size' => '20',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'vname' => 'LBL_LAST_NAME',
    'type' => 'varchar',
    'len' => '100',
    'unified_search' => true,
    'duplicate_on_record_copy' => 'always',
    'full_text_search' => 
    array (
      'enabled' => true,
      'boost' => '1.79',
      'searchable' => true,
    ),
    'comment' => 'Last name of the contact',
    'merge_filter' => 'disabled',
    'required' => true,
    'importable' => 'required',
    'massupdate' => false,
    'default' => '',
    'no_default' => false,
    'comments' => 'Last name of the contact',
    'help' => '',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'size' => '20',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
    'full_text_search' => true,
);

if (!class_exists('VardefManager')){
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('t_id_mod2','t_id_mod2', array('basic','team_security','assignable','taggable','person'));