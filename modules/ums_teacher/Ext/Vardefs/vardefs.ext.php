<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/ums_teacher/Ext/Vardefs/sugarfield_department.php

 // created: 2017-07-20 18:17:04
$dictionary['ums_teacher']['fields']['department']['required']=true;
$dictionary['ums_teacher']['fields']['department']['audited']=false;
$dictionary['ums_teacher']['fields']['department']['massupdate']=false;
$dictionary['ums_teacher']['fields']['department']['comments']='The department of the contact';
$dictionary['ums_teacher']['fields']['department']['duplicate_merge']='enabled';
$dictionary['ums_teacher']['fields']['department']['duplicate_merge_dom_value']='1';
$dictionary['ums_teacher']['fields']['department']['merge_filter']='disabled';
$dictionary['ums_teacher']['fields']['department']['unified_search']=false;
$dictionary['ums_teacher']['fields']['department']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ums_teacher']['fields']['department']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/ums_teacher/Ext/Vardefs/sugarfield_cnic_c.php

 // created: 2017-07-20 18:19:54
$dictionary['ums_teacher']['fields']['cnic_c']['labelValue']='CNIC';
$dictionary['ums_teacher']['fields']['cnic_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ums_teacher']['fields']['cnic_c']['enforced']='';
$dictionary['ums_teacher']['fields']['cnic_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/ums_teacher/Ext/Vardefs/ums_course_ums_teacher_1_ums_teacher.php

// created: 2017-07-20 18:39:37
$dictionary["ums_teacher"]["fields"]["ums_course_ums_teacher_1"] = array (
  'name' => 'ums_course_ums_teacher_1',
  'type' => 'link',
  'relationship' => 'ums_course_ums_teacher_1',
  'source' => 'non-db',
  'module' => 'ums_course',
  'bean_name' => 'ums_course',
  'vname' => 'LBL_UMS_COURSE_UMS_TEACHER_1_FROM_UMS_COURSE_TITLE',
  'id_name' => 'ums_course_ums_teacher_1ums_course_ida',
);

?>
