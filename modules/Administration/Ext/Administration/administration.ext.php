<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/my_admin.php


    $admin_option_defs = array();
    $admin_option_defs['Administration']['admin_key'] = array(
        //Icon name. Available icons are located in ./themes/default/images
        'Administration',

        //Link name label 
        'LBL_LINK_NAME',

        //Link description label
        'LBL_LINK_DESCRIPTION',

        //Link URL - For Sidecar modules
        //'javascript:parent.SUGAR.App.router.navigate("<module>/<path>", {trigger: true});',

        //Alternatively, if you are linking to BWC modules
        './index.php?module=t_tempting2&action=new_action',
    );

    $admin_group_header[] = array(
        //Section header label
        'LBL_SECTION_HEADER',

        //$other_text parameter for get_form_header()
        '',

        //$show_help parameter for get_form_header()
        false,

        //Section links
        $admin_option_defs, 

        //Section description label
        'LBL_SECTION_DESCRIPTION'
    );
?>
