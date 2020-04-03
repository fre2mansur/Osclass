
<?php
$filters = Params::getParam('where');
if($filters) {
	$cat = Category::newInstance()->listWhere($filters);
} else {
	$cat = Category::newInstance()->listAll();
}
echo json_encode($cat);
?>