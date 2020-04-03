
<?php
$filters = Params::getParam('where');
if($filters) {
	$pages = Category::newInstance()->listWhere($filters);
} else {
	$pages = Page::newInstance()->listAll(0);
}
echo json_encode($pages);
?>