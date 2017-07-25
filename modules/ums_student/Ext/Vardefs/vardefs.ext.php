<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/ums_student/Ext/Vardefs/sugarfield_roll_no_c.php

 // created: 2017-07-20 18:12:33
$dictionary['ums_student']['fields']['roll_no_c']['labelValue']='Roll Number';
$dictionary['ums_student']['fields']['roll_no_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ums_student']['fields']['roll_no_c']['enforced']='';
$dictionary['ums_student']['fields']['roll_no_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/ums_student/Ext/Vardefs/sugarfield_department.php

 // created: 2017-07-20 18:12:59
$dictionary['ums_student']['fields']['department']['required']=true;
$dictionary['ums_student']['fields']['department']['audited']=false;
$dictionary['ums_student']['fields']['department']['massupdate']=false;
$dictionary['ums_student']['fields']['department']['comments']='The department of the contact';
$dictionary['ums_student']['fields']['department']['duplicate_merge']='enabled';
$dictionary['ums_student']['fields']['department']['duplicate_merge_dom_value']='1';
$dictionary['ums_student']['fields']['department']['merge_filter']='disabled';
$dictionary['ums_student']['fields']['department']['unified_search']=false;
$dictionary['ums_student']['fields']['department']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ums_student']['fields']['department']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/ums_student/Ext/Vardefs/ums_course_ums_student_1_ums_student.php

// created: 2017-07-20 18:39:54
$dictionary["ums_student"]["fields"]["ums_course_ums_student_1"] = array (
  'name' => 'ums_course_ums_student_1',
  'type' => 'link',
  'relationship' => 'ums_course_ums_student_1',
  'source' => 'non-db',
  'module' => 'ums_course',
  'bean_name' => 'ums_course',
  'vname' => 'LBL_UMS_COURSE_UMS_STUDENT_1_FROM_UMS_COURSE_TITLE',
  'id_name' => 'ums_course_ums_student_1ums_course_ida',
);

?>
