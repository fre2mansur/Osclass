<?php
$filters = Params::getParam('where');
if($filters) {
	$users = User::newInstance()->listWhere($filters);
} else {
	$users = User::newInstance()->search();
}
foreach($users['users'] as $user) {
	unset($user['s_password']);
	unset($user['s_secret']);
	$secured[] = $user;
}

echo json_encode($secured);
?>