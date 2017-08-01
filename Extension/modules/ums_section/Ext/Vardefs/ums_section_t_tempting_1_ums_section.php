<?php
// created: 2017-07-31 10:45:15
$dictionary["ums_section"]["fields"]["ums_section_t_tempting_1"] = array (
  'name' => 'ums_section_t_tempting_1',
  'type' => 'link',
  'relationship' => 'ums_section_t_tempting_1',
  'source' => 'non-db',
  'module' => 't_tempting',
  'bean_name' => 't_tempting',
  'vname' => 'LBL_UMS_SECTION_T_TEMPTING_1_FROM_T_TEMPTING_TITLE',
  'id_name' => 'ums_section_t_tempting_1t_tempting_idb',
);
$dictionary["ums_section"]["fields"]["ums_section_t_tempting_1_name"] = array (
  'name' => 'ums_section_t_tempting_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UMS_SECTION_T_TEMPTING_1_FROM_T_TEMPTING_TITLE',
  'save' => true,
  'id_name' => 'ums_section_t_tempting_1t_tempting_idb',
  'link' => 'ums_section_t_tempting_1',
  'table' => 't_tempting',
  'module' => 't_tempting',
  'rname' => 'name',
);
$dictionary["ums_section"]["fields"]["ums_section_t_tempting_1t_tempting_idb"] = array (
  'name' => 'ums_section_t_tempting_1t_tempting_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UMS_SECTION_T_TEMPTING_1_FROM_T_TEMPTING_TITLE_ID',
  'id_name' => 'ums_section_t_tempting_1t_tempting_idb',
  'link' => 'ums_section_t_tempting_1',
  'table' => 't_tempting',
  'module' => 't_tempting',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
