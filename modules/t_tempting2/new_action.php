<?php

echo 'Hello World!<br><br>';

// -----------------------------------------------------------------------------

// $module = 't_tempting2';
// $bean = BeanFactory::newBean($module);
// $bean->name = 'Sample Record';
// $bean->alpha_c = 'Sample Alpha';
// $bean->beta_c = 'Sample Beta';
// $bean->gamma_c = 'Sample Gamma';
// $bean->save();
// $record_id = $bean->id;

// echo 'Record added with ID: '.$record_id.'<br>';

// -----------------------------------------------------------------------------

// require_once('include/SugarQuery/SugarQuery.php');

// $query = new SugarQuery();
// $query->select('alpha_c', 'beta_c', 'gamma_c');
// $query->from(BeanFactory::newBean('t_tempting2'));
// $query->Where()->equals('name', 'Tail');

// $result = $query->execute();

// $count = count($result);

// if ($count == 0) {
// 	echo "No results.<br>";
// }
// elseif ($count == 1) {
// 	echo "Aplha: ".$result[0]['alpha_c']."<br>";
// 	echo "Beta: ".$result[0]['beta_c']."<br>";
// 	echo "Gamma: ".$result[0]['beta_c']."<br>";
// }
// else {
// 	echo "Multiple records found.<br>";
// }

// --------------------------------------------------------------------------------

// $bean = BeanFactory::retrieveBean('t_tempting2', '7e244454-72c3-11e7-966f-2c56dc94b8c8');
// $bean->update_date_modified = false;
// $bean->name = 'Changed';
// $bean->save();

// --------------------------------------------------------------------------------

// $bean = BeanFactory::retrieveBean('t_tempting2', '53bf0e52-72cc-11e7-a0b2-2c56dc94b8c8');
// $bean->mark_deleted();
// $bean->save();

// --------------------------------------------------------------------------------

$bean = BeanFactory::getBean('ums_course', 'f122e392-6d51-11e7-8e0b-2c56dc94b8c8');
if ($bean->load_relationship('ums_course_ums_student_1')) {
	$relatedBeans = $bean->ums_course_ums_student_1->getBeans();

	$count = count($relatedBeans);
	if ($count == 0) {
		echo "No related records found.<br>";
	}
	else {
		$num = 0;
		$record = current($relatedBeans);
		while ($record) {
			echo "Related Record ".++$num.": ".$record->name."<br>";
			$record = next($relatedBeans);
		}
	}
}

// -------------------------------------------------------------------------------

?>