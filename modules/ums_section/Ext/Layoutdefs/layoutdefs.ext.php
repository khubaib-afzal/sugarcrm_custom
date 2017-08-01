<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/ums_section/Ext/Layoutdefs/ums_section_t_tempting_1_ums_section.php


    $layout_defs["ums_section"]["subpanel_setup"]['ums_section_t_tempting_1'] = array (
        'order' => 100,
        'module' => 't_tempting',
        'subpanel_name' => 'default',
        'sort_order' => 'asc',
        'sort_by' => 'id',
        'title_key' => 'LBL_SUBPANEL_TITLE',
        'get_subpanel_data' => 'ums_section_t_tempting_1',
        'top_buttons' => array (
            array (
              'widget_class' => 'SubPanelTopButtonQuickCreate',
            ),
            array (
              'widget_class' => 'SubPanelTopSelectButton',
              'mode' => 'MultiSelect',
            ),
        ),
    );
?>
