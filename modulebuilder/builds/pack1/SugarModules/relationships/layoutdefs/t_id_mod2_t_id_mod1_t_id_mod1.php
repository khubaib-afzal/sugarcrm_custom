<?php
 // created: 2017-07-19 18:34:08
$layout_defs["t_id_mod1"]["subpanel_setup"]['t_id_mod2_t_id_mod1'] = array (
  'order' => 100,
  'module' => 't_id_mod2',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_T_ID_MOD2_T_ID_MOD1_FROM_T_ID_MOD2_TITLE',
  'get_subpanel_data' => 't_id_mod2_t_id_mod1',
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
