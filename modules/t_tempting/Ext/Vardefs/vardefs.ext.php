<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/t_tempting/Ext/Vardefs/ums_section_t_tempting_1_t_tempting.php

// created: 2017-07-31 10:45:15
$dictionary["t_tempting"]["fields"]["ums_section_t_tempting_1"] = array (
  'name' => 'ums_section_t_tempting_1',
  'type' => 'link',
  'relationship' => 'ums_section_t_tempting_1',
  'source' => 'non-db',
  'module' => 'ums_section',
  'bean_name' => 'ums_section',
  'vname' => 'LBL_UMS_SECTION_T_TEMPTING_1_FROM_UMS_SECTION_TITLE',
  'id_name' => 'ums_section_t_tempting_1ums_section_ida',
);
$dictionary["t_tempting"]["fields"]["ums_section_t_tempting_1_name"] = array (
  'name' => 'ums_section_t_tempting_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UMS_SECTION_T_TEMPTING_1_FROM_UMS_SECTION_TITLE',
  'save' => true,
  'id_name' => 'ums_section_t_tempting_1ums_section_ida',
  'link' => 'ums_section_t_tempting_1',
  'table' => 'ums_section',
  'module' => 'ums_section',
  'rname' => 'name',
);
$dictionary["t_tempting"]["fields"]["ums_section_t_tempting_1ums_section_ida"] = array (
  'name' => 'ums_section_t_tempting_1ums_section_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UMS_SECTION_T_TEMPTING_1_FROM_UMS_SECTION_TITLE_ID',
  'id_name' => 'ums_section_t_tempting_1ums_section_ida',
  'link' => 'ums_section_t_tempting_1',
  'table' => 'ums_section',
  'module' => 'ums_section',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
