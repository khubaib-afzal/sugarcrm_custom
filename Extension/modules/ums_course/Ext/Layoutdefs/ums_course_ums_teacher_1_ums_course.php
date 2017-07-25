<?php
 // created: 2017-07-20 18:39:37
$layout_defs["ums_course"]["subpanel_setup"]['ums_course_ums_teacher_1'] = array (
  'order' => 100,
  'module' => 'ums_teacher',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UMS_COURSE_UMS_TEACHER_1_FROM_UMS_TEACHER_TITLE',
  'get_subpanel_data' => 'ums_course_ums_teacher_1',
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
