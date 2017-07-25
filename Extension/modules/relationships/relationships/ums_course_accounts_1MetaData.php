<?php
// created: 2017-07-20 17:46:33
$dictionary["ums_course_accounts_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ums_course_accounts_1' => 
    array (
      'lhs_module' => 'ums_course',
      'lhs_table' => 'ums_course',
      'lhs_key' => 'id',
      'rhs_module' => 'Accounts',
      'rhs_table' => 'accounts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ums_course_accounts_1_c',
      'join_key_lhs' => 'ums_course_accounts_1ums_course_ida',
      'join_key_rhs' => 'ums_course_accounts_1accounts_idb',
    ),
  ),
  'table' => 'ums_course_accounts_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'ums_course_accounts_1ums_course_ida' => 
    array (
      'name' => 'ums_course_accounts_1ums_course_ida',
      'type' => 'id',
    ),
    'ums_course_accounts_1accounts_idb' => 
    array (
      'name' => 'ums_course_accounts_1accounts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ums_course_accounts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ums_course_accounts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ums_course_accounts_1ums_course_ida',
        1 => 'ums_course_accounts_1accounts_idb',
      ),
    ),
  ),
);