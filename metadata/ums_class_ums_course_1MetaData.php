<?php
// created: 2017-07-20 18:39:54
$dictionary["ums_class_ums_course_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ums_class_ums_course_1' => 
    array (
      'lhs_module' => 'ums_class',
      'lhs_table' => 'ums_class',
      'lhs_key' => 'id',
      'rhs_module' => 'ums_course',
      'rhs_table' => 'ums_course',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ums_class_ums_course_1_c',
      'join_key_lhs' => 'ums_class_ums_course_1ums_class_ida',
      'join_key_rhs' => 'ums_class_ums_course_1ums_course_idb',
    ),
  ),
  'table' => 'ums_class_ums_course_1_c',
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
    'ums_class_ums_course_1ums_class_ida' => 
    array (
      'name' => 'ums_class_ums_course_1ums_class_ida',
      'type' => 'id',
    ),
    'ums_class_ums_course_1ums_course_idb' => 
    array (
      'name' => 'ums_class_ums_course_1ums_course_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ums_class_ums_course_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ums_class_ums_course_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ums_class_ums_course_1ums_class_ida',
        1 => 'ums_class_ums_course_1ums_course_idb',
      ),
    ),
  ),
);