<?php

    require '../model/database.php';
    require '../model/product_db.php';

    $action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
        $ACTION = filter_input(INPUT_GET, 'action');
        if($action == NULL) {
            $action = 'list_products';
        }            
    }

    if($action == 'list_products'){
        $productCode = filter_input(INPUT_GET, 'productCode', 
                                        FILTER_VALIDATE_INT);
        if($productCode == NULL || $productCode == FALSE){
            $productCode = 1;
        }
        $productCode = get_products();
        include('product_list.php');
    } else if ($action == 'delete_product'){
        $productCode = filter_input(INPUT_POST, 'productCode',
                                        FILTER_VALIDATE_INT);
        if($productCode == NULL || $productCode == FALSE){
            $error = "Missing or incorrect product code";    
            include('../errors/error.php');
        } else {
            delete_product($productCode);
            header("Location: .?productCode=$productCode");
        }
    } else if ($action == 'show_add_form'){
        $productCode = get_product();
        include('product_add.php');
    } else if($action == 'add_product'){
        $productCode = filter_input(INPUT_POST, 'productCode',
                                        FILTER_VALIDATE_INT);
        $name = filter_input(INPUT_POST, 'name');
        $version = filter_input(INPUT_POST, 'version');
        $releaseDate = filter_input(INPUT_POST, 'releaseDate');
        if($productCode == NULL || $productCode == FALSE        
            || $code == NULL || $name == NULL ||
                $version == NULL || $releaseDate == NULL){
                    $error = "Invalid product data. Try again.";
                    include('../errors/error.php');
        } else {
            add_product($productCode, $name, $version, $releaseDate);
            header("Location: .?productCode=$productCode");
        }
    }
?>