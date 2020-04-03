
<?php
$filters = Params::getParam('where');

$offset = 0;

//if(Params::getParam('where')){$filters = Params::getParam('where');} else {$filters = array();}
if(Params::getParam('limit')){$limit = Params::getParam('limit');} else {$limit = 12;}
//if(Params::getParam('offset')){$offset = Params::getParam('offset');} else {$offset = 0;}

//if($filters) {
//	$items = Item::newInstance()->listWhere($filters);
	//$items = Item::newInstance()->listAllWithCategories(Params::getParam('where'), $limit, $offset);
////} else {
	$items = Item::newInstance()->listWhereWithPagination($filters, $limit);
//}
echo var_dump($filters);
echo json_encode($items);



?>