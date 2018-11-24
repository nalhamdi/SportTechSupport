<?php
    require '../model/database.php';
    require '../model/register_product_db.php';

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if($action == NULL) {
            $action = 'login_form';
        }
    }

    if ($action == 'login_form') {
        include('customer_login.php');
    } else if ($action == 'user_login') {
        $email = filter_input(INPUT_POST, 'email');
        if($email == NULL){
            $error = "Missing or incorrect email";
            include('../errors/error.php');
        } else {
            $email = get_customers_by_email($email);
            // header("Location: .");
            include('register_product.php');
        }
    }

?>
