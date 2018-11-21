<?php

    require '../model/database.php';
    require '../model/tech_db.php';

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $action = filter_input(INPUT_GET, 'action');
        if($action == NULL) {
            $action = 'list_technicians';
        }
    }

    if($action == 'list_technicians'){
        $techID = filter_input(INPUT_GET, 'techID');
        if($techID == NULL){
            $techID = 1;
        }
        $techID = get_technicians();
        include('tech_list.php');
    } else if ($action == 'delete_technician'){
        $techID = filter_input(INPUT_POST, 'techID');
        if($techID == NULL){
            $error = "Missing or incorrect tech id";
            include('../errors/error.php');
        } else {
            delete_product($techID);
            header("Location: .");
        }
    } else if ($action == 'show_add_form'){
        $techID = get_technicians();
        include('tech_add.php');
    } else if($action == 'add_technician'){
        $techID = filter_input(INPUT_POST, 'techID');
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $password = filter_input(INPUT_POST, 'password');
        if($techID == NULL || $firstName == NULL
            || $lastName == NULL || $email == NULL
            || $phone == NULL || $password == NULL){
                    $error = "Invalid tech data. Try again.";
                    include('../errors/error.php');
        } else {
            add_technician($techID, $firstName, $lastName, $email, $phone, $password);
            header("Location: .?techID=$techID");
        }
    }
?>
