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
        $email = filter_input(INPUT_GET, 'email');
        if($email == NULL){
            $email = 1;
        }
        $email = get_customers_by_email($email);
        include('customer_login.php');
    } else if ($action == 'user_login') {
        $email = filter_input(INPUT_POST, 'email');
        if($email == NULL){
            $error = "Missing or incorrect email";
            include('../errors/error.php');
        } else {
            $email = get_customers_by_email($email);
            // header("Location: .");
            include('product_registration.php');
        }
    }

?>
