<?php
require '../model/database.php';
require '../model/incident_db.php';
require '../model/register_product_db.php';

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action == NULL) {
        $action = 'login_customer';
    }
}

if($action == 'login_customer'){
    include('get_customer_page.php');
}
?>
