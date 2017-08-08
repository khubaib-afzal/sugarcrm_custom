<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/ums_course/Ext/Vardefs/sugarfield_name.php

 // created: 2017-07-20 18:22:04
$dictionary['ums_course']['fields']['name']['len']='255';
$dictionary['ums_course']['fields']['name']['audited']=false;
$dictionary['ums_course']['fields']['name']['massupdate']=false;
$dictionary['ums_course']['fields']['name']['unified_search']=false;
$dictionary['ums_course']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.55',
  'searchable' => true,
);
$dictionary['ums_course']['fields']['name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/ums_course/Ext/Vardefs/sugarfield_department_c.php

 // created: 2017-07-20 18:22:26
$dictionary['ums_course']['fields']['department_c']['labelValue']='Department';
$dictionary['ums_course']['fields']['department_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ums_course']['fields']['department_c']['enforced']='';
$dictionary['ums_course']['fields']['department_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/ums_course/Ext/Vardefs/sugarfield_crd_hr_c.php

 // created: 2017-07-20 18:23:05
$dictionary['ums_course']['fields']['crd_hr_c']['labelValue']='Credit Hours';
$dictionary['ums_course']['fields']['crd_hr_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['ums_course']['fields']['crd_hr_c']['enforced']='';
$dictionary['ums_course']['fields']['crd_hr_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/ums_course/Ext/Vardefs/ums_course_ums_teacher_1_ums_course.php

// created: 2017-07-20 18:39:37
$dictionary["ums_course"]["fields"]["ums_course_ums_teacher_1"] = array (
  'name' => 'ums_course_ums_teacher_1',
  'type' => 'link',
  'relationship' => 'ums_course_ums_teacher_1',
  'source' => 'non-db',
  'module' => 'ums_teacher',
  'bean_name' => 'ums_teacher',
  'vname' => 'LBL_UMS_COURSE_UMS_TEACHER_1_FROM_UMS_TEACHER_TITLE',
  'id_name' => 'ums_course_ums_teacher_1ums_teacher_idb',
);

?>
<?php
// Merged from custom/Extension/modules/ums_course/Ext/Vardefs/ums_course_ums_student_1_ums_course.php

// created: 2017-07-20 18:39:54
$dictionary["ums_course"]["fields"]["ums_course_ums_student_1"] = array (
  'name' => 'ums_course_ums_student_1',
  'type' => 'link',
  'relationship' => 'ums_course_ums_student_1',
  'source' => 'non-db',
  'module' => 'ums_student',
  'bean_name' => 'ums_student',
  'vname' => 'LBL_UMS_COURSE_UMS_STUDENT_1_FROM_UMS_STUDENT_TITLE',
  'id_name' => 'ums_course_ums_student_1ums_student_idb',
);

?>
<?php
// Merged from custom/Extension/modules/ums_course/Ext/Vardefs/ums_class_ums_course_1_ums_course.php

// created: 2017-07-20 18:39:54
$dictionary["ums_course"]["fields"]["ums_class_ums_course_1"] = array (
  'name' => 'ums_class_ums_course_1',
  'type' => 'link',
  'relationship' => 'ums_class_ums_course_1',
  'source' => 'non-db',
  'module' => 'ums_class',
  'bean_name' => 'ums_class',
  'vname' => 'class',
  'id_name' => 'ums_class_ums_course_1ums_class_ida',
);

?>
<?php
// Merged from custom/Extension/modules/ums_course/Ext/Vardefs/sugarfield_title_c.php

 // created: 2017-08-08 16:37:31
$dictionary['ums_course']['fields']['title_c']['labelValue']='Title';
$dictionary['ums_course']['fields']['title_c']['enforced']='';
$dictionary['ums_course']['fields']['title_c']['dependency']='';

 
?>
