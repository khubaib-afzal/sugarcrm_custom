<?php
// created: 2017-07-19 18:34:08
$dictionary["t_id_mod2_t_id_mod1"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    't_id_mod2_t_id_mod1' => 
    array (
      'lhs_module' => 't_id_mod2',
      'lhs_table' => 't_id_mod2',
      'lhs_key' => 'id',
      'rhs_module' => 't_id_mod1',
      'rhs_table' => 't_id_mod1',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 't_id_mod2_t_id_mod1_c',
      'join_key_lhs' => 't_id_mod2_t_id_mod1t_id_mod2_ida',
      'join_key_rhs' => 't_id_mod2_t_id_mod1t_id_mod1_idb',
    ),
  ),
  'table' => 't_id_mod2_t_id_mod1_c',
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
    't_id_mod2_t_id_mod1t_id_mod2_ida' => 
    array (
      'name' => 't_id_mod2_t_id_mod1t_id_mod2_ida',
      'type' => 'id',
    ),
    't_id_mod2_t_id_mod1t_id_mod1_idb' => 
    array (
      'name' => 't_id_mod2_t_id_mod1t_id_mod1_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 't_id_mod2_t_id_mod1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 't_id_mod2_t_id_mod1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 't_id_mod2_t_id_mod1t_id_mod2_ida',
        1 => 't_id_mod2_t_id_mod1t_id_mod1_idb',
      ),
    ),
  ),
);