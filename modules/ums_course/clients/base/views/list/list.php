<?php
$module_name = 'ums_course';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'department_c',
                'label' => 'LBL_DEPARTMENT',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'crd_hr_c',
                'label' => 'LBL_CRD_HR',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'title_c',
                'label' => 'LBL_TITLE',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              5 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => false,
              ),
              7 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
