<?php if ( ! defined('ABS_PATH')) exit('ABS_PATH is not loaded. Direct access is not allowed.');

header('Content-Type: application/json');

switch (Params::getParam('get')) {
    case 'categories':
        include(osc_lib_path().'osclass/rest/v1/categories.php');
        break;
    case 'items':
        include(osc_lib_path().'osclass/rest/v1/items.php');
        break;
    case 'users':
        include(osc_lib_path().'osclass/rest/v1/users.php');
        break;
    case 'pages':
        include(osc_lib_path().'osclass/rest/v1/pages.php');
        break;
    
    default:
        include(osc_lib_path().'osclass/rest/v1/index.php');
        break;
}
?>
