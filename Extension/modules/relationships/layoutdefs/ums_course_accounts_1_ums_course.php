<?php
 // created: 2017-07-20 17:46:33
$layout_defs["ums_course"]["subpanel_setup"]['ums_course_accounts_1'] = array (
  'order' => 100,
  'module' => 'Accounts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UMS_COURSE_ACCOUNTS_1_FROM_ACCOUNTS_TITLE',
  'get_subpanel_data' => 'ums_course_accounts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
