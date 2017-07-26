<?php
// created: 2017-07-20 18:39:54
$dictionary["t_tempting_ums_class_1"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    't_tempting_ums_class_1' => 
    array (
      'lhs_module' => 't_tempting',
      'lhs_table' => 't_tempting',
      'lhs_key' => 'id',
      'rhs_module' => 'ums_class',
      'rhs_table' => 'ums_class',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 't_tempting_ums_class_1_c',
      'join_key_lhs' => 't_tempting_ums_class_1t_tempting_ida',
      'join_key_rhs' => 't_tempting_ums_class_1ums_class_idb',
    ),
  ),
  'table' => 't_tempting_ums_class_1_c',
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
    't_tempting_ums_class_1t_tempting_ida' => 
    array (
      'name' => 't_tempting_ums_class_1t_tempting_ida',
      'type' => 'id',
    ),
    't_tempting_ums_class_1ums_class_idb' => 
    array (
      'name' => 't_tempting_ums_class_1ums_class_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 't_tempting_ums_class_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 't_tempting_ums_class_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 't_tempting_ums_class_1t_tempting_ida',
        1 => 't_tempting_ums_class_1ums_class_idb',
      ),
    ),
  ),
);