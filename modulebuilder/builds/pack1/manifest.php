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

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.7.1.2',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'PRO',
    1 => 'CORP',
    2 => 'ENT',
    3 => 'ULT',
  ),
  'readme' => '',
  'key' => 't_id',
  'author' => 'khubaib',
  'description' => 'test package',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'pack1',
  'published_date' => '2017-07-19 13:34:08',
  'type' => 'module',
  'version' => 1500471248,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'pack1',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 't_id_mod1',
      'class' => 't_id_mod1',
      'path' => 'modules/t_id_mod1/t_id_mod1.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 't_id_mod2',
      'class' => 't_id_mod2',
      'path' => 'modules/t_id_mod2/t_id_mod2.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/t_id_mod2_t_id_mod1_t_id_mod1.php',
      'to_module' => 't_id_mod1',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/t_id_mod2_t_id_mod1_t_id_mod2.php',
      'to_module' => 't_id_mod2',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/t_id_mod2_t_id_mod1MetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t_id_mod1',
      'to' => 'modules/t_id_mod1',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/t_id_mod2',
      'to' => 'modules/t_id_mod2',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'bg_BG',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'cs_CZ',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'da_DK',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'de_DE',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'el_EL',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'es_ES',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'fr_FR',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'he_IL',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'hu_HU',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'it_it',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'lt_LT',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'ja_JP',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'ko_KR',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'lv_LV',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'nb_NO',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'nl_NL',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'pl_PL',
    ),
    18 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'pt_PT',
    ),
    19 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'ro_RO',
    ),
    20 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'ru_RU',
    ),
    21 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'sv_SE',
    ),
    22 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'tr_TR',
    ),
    23 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'zh_TW',
    ),
    24 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'zh_CN',
    ),
    25 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'pt_BR',
    ),
    26 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'ca_ES',
    ),
    27 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'en_UK',
    ),
    28 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'sr_RS',
    ),
    29 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'sk_SK',
    ),
    30 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'sq_AL',
    ),
    31 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'et_EE',
    ),
    32 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'es_LA',
    ),
    33 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'fi_FI',
    ),
    34 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'ar_SA',
    ),
    35 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod1.php',
      'to_module' => 't_id_mod1',
      'language' => 'uk_UA',
    ),
    36 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'en_us',
    ),
    37 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'bg_BG',
    ),
    38 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'cs_CZ',
    ),
    39 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'da_DK',
    ),
    40 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'de_DE',
    ),
    41 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'el_EL',
    ),
    42 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'es_ES',
    ),
    43 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'fr_FR',
    ),
    44 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'he_IL',
    ),
    45 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'hu_HU',
    ),
    46 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'it_it',
    ),
    47 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'lt_LT',
    ),
    48 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'ja_JP',
    ),
    49 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'ko_KR',
    ),
    50 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'lv_LV',
    ),
    51 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'nb_NO',
    ),
    52 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'nl_NL',
    ),
    53 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'pl_PL',
    ),
    54 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'pt_PT',
    ),
    55 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'ro_RO',
    ),
    56 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'ru_RU',
    ),
    57 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'sv_SE',
    ),
    58 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'tr_TR',
    ),
    59 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'zh_TW',
    ),
    60 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'zh_CN',
    ),
    61 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'pt_BR',
    ),
    62 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'ca_ES',
    ),
    63 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'en_UK',
    ),
    64 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'sr_RS',
    ),
    65 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'sk_SK',
    ),
    66 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'sq_AL',
    ),
    67 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'et_EE',
    ),
    68 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'es_LA',
    ),
    69 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'fi_FI',
    ),
    70 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'ar_SA',
    ),
    71 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/t_id_mod2.php',
      'to_module' => 't_id_mod2',
      'language' => 'uk_UA',
    ),
    72 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
  ),
  'sidecar' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/t_id_mod2_t_id_mod1_t_id_mod1.php',
      'to_module' => 't_id_mod1',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/clients/base/layouts/subpanels/t_id_mod2_t_id_mod1_t_id_mod2.php',
      'to_module' => 't_id_mod2',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/t_id_mod2_t_id_mod1_t_id_mod1.php',
      'to_module' => 't_id_mod1',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/clients/mobile/layouts/subpanels/t_id_mod2_t_id_mod1_t_id_mod2.php',
      'to_module' => 't_id_mod2',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/t_id_mod2_t_id_mod1_t_id_mod1.php',
      'to_module' => 't_id_mod1',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/t_id_mod2_t_id_mod1_t_id_mod2.php',
      'to_module' => 't_id_mod2',
    ),
  ),
  'wireless_subpanels' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/t_id_mod2_t_id_mod1_t_id_mod1.php',
      'to_module' => 't_id_mod1',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/wirelesslayoutdefs/t_id_mod2_t_id_mod1_t_id_mod2.php',
      'to_module' => 't_id_mod2',
    ),
  ),
);