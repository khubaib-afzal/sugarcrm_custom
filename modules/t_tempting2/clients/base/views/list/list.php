<?php
$module_name = 't_tempting2';
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
                'name' => 'alpha_c',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'beta_c',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'gamma_c',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'delta_c',
                'label' => 'LBL_DELTA',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'asc',
        ),
      ),
    ),
  ),
);
