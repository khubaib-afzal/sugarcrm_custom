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
$relationships = array (
  'ums_course_ums_teacher_1' => 
  array (
    'name' => 'ums_course_ums_teacher_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'ums_course_ums_teacher_1' => 
      array (
        'lhs_module' => 'ums_course',
        'lhs_table' => 'ums_course',
        'lhs_key' => 'id',
        'rhs_module' => 'ums_teacher',
        'rhs_table' => 'ums_teacher',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ums_course_ums_teacher_1_c',
        'join_key_lhs' => 'ums_course_ums_teacher_1ums_course_ida',
        'join_key_rhs' => 'ums_course_ums_teacher_1ums_teacher_idb',
      ),
    ),
    'table' => 'ums_course_ums_teacher_1_c',
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
      'ums_course_ums_teacher_1ums_course_ida' => 
      array (
        'name' => 'ums_course_ums_teacher_1ums_course_ida',
        'type' => 'id',
      ),
      'ums_course_ums_teacher_1ums_teacher_idb' => 
      array (
        'name' => 'ums_course_ums_teacher_1ums_teacher_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ums_course_ums_teacher_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ums_course_ums_teacher_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ums_course_ums_teacher_1ums_course_ida',
          1 => 'ums_course_ums_teacher_1ums_teacher_idb',
        ),
      ),
    ),
    'lhs_module' => 'ums_course',
    'lhs_table' => 'ums_course',
    'lhs_key' => 'id',
    'rhs_module' => 'ums_teacher',
    'rhs_table' => 'ums_teacher',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ums_course_ums_teacher_1_c',
    'join_key_lhs' => 'ums_course_ums_teacher_1ums_course_ida',
    'join_key_rhs' => 'ums_course_ums_teacher_1ums_teacher_idb',
    'readonly' => true,
    'relationship_name' => 'ums_course_ums_teacher_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'ums_course_ums_student_1' => 
  array (
    'name' => 'ums_course_ums_student_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'ums_course_ums_student_1' => 
      array (
        'lhs_module' => 'ums_course',
        'lhs_table' => 'ums_course',
        'lhs_key' => 'id',
        'rhs_module' => 'ums_student',
        'rhs_table' => 'ums_student',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'ums_course_ums_student_1_c',
        'join_key_lhs' => 'ums_course_ums_student_1ums_course_ida',
        'join_key_rhs' => 'ums_course_ums_student_1ums_student_idb',
      ),
    ),
    'table' => 'ums_course_ums_student_1_c',
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
      'ums_course_ums_student_1ums_course_ida' => 
      array (
        'name' => 'ums_course_ums_student_1ums_course_ida',
        'type' => 'id',
      ),
      'ums_course_ums_student_1ums_student_idb' => 
      array (
        'name' => 'ums_course_ums_student_1ums_student_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'ums_course_ums_student_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'ums_course_ums_student_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'ums_course_ums_student_1ums_course_ida',
          1 => 'ums_course_ums_student_1ums_student_idb',
        ),
      ),
    ),
    'lhs_module' => 'ums_course',
    'lhs_table' => 'ums_course',
    'lhs_key' => 'id',
    'rhs_module' => 'ums_student',
    'rhs_table' => 'ums_student',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'ums_course_ums_student_1_c',
    'join_key_lhs' => 'ums_course_ums_student_1ums_course_ida',
    'join_key_rhs' => 'ums_course_ums_student_1ums_student_idb',
    'readonly' => true,
    'relationship_name' => 'ums_course_ums_student_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'ums_course_modified_user' => 
  array (
    'name' => 'ums_course_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ums_course',
    'rhs_table' => 'ums_course',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'ums_course_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'ums_course_created_by' => 
  array (
    'name' => 'ums_course_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ums_course',
    'rhs_table' => 'ums_course',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'ums_course_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'ums_course_activities' => 
  array (
    'name' => 'ums_course_activities',
    'lhs_module' => 'ums_course',
    'lhs_table' => 'ums_course',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ums_course',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'len' => 36,
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
        'len' => 36,
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'ums_course_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'ums_course_following' => 
  array (
    'name' => 'ums_course_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ums_course',
    'rhs_table' => 'ums_course',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'ums_course',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'ums_course_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'ums_course_favorite' => 
  array (
    'name' => 'ums_course_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ums_course',
    'rhs_table' => 'ums_course',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'ums_course',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'ums_course_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'ums_course_assigned_user' => 
  array (
    'name' => 'ums_course_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'ums_course',
    'rhs_table' => 'ums_course',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'ums_course_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
);