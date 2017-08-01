<?php
// created: 2017-07-31 10:45:15
$dictionary["ums_section_t_tempting_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'ums_section_t_tempting_1' => 
    array (
      'lhs_module' => 'ums_section',
      'lhs_table' => 'ums_section',
      'lhs_key' => 'id',
      'rhs_module' => 't_tempting',
      'rhs_table' => 't_tempting',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ums_section_t_tempting_1_c',
      'join_key_lhs' => 'ums_section_t_tempting_1ums_section_ida',
      'join_key_rhs' => 'ums_section_t_tempting_1t_tempting_idb',
    ),
  ),
  'table' => 'ums_section_t_tempting_1_c',
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
    'ums_section_t_tempting_1ums_section_ida' => 
    array (
      'name' => 'ums_section_t_tempting_1ums_section_ida',
      'type' => 'id',
    ),
    'ums_section_t_tempting_1t_tempting_idb' => 
    array (
      'name' => 'ums_section_t_tempting_1t_tempting_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ums_section_t_tempting_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ums_section_t_tempting_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ums_section_t_tempting_1ums_section_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ums_section_t_tempting_1_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ums_section_t_tempting_1t_tempting_idb',
      ),
    ),
  ),
);