
<?php
$routes = array('categories', 'pages', 'items', 'users');
$routes = array('get'=> $routes);
echo json_encode($routes);
?>