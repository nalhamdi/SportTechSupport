<?php

    require '../model/database.php';
    require '../model/customer_db.php';

    $action = filter_input(INPUT_POST, 'action');
    if($action == NULL)
    {
      $action = filter_input(INPUT_GET, 'action');
      if($action == NULL)
      {
        $action = 'select_customer';
      }
    }


    if($action == 'select_customer')
    {
      $LastName = filter_input(INPUT_GET, 'LastName');
      if($LastName == NULL)
      {
        $LastName = 1;
      }

      //$LastName = get_customer_by_lastName($LastName);
      $LastName = get_customers();
      include('select_customer_page.php');
    }
    else if ($action == 'view_customer') //TODO
     {
       $custID = filter_input(INPUT_POST, 'custID');
       if ($custID == NULL)
       {
         $error = "Not Found!";
         include('../errors/error.php');
       }
       else
       {
         $user =  get_customer_by_Id($custID);
         include('view_update_customer.php');
       }
     }
     else if ($action == 'search_last_name') //TODO
      {
        $lastName = filter_input(INPUT_POST, 'lastName');

        $LastName = get_customer_by_lastName($lastName);
        include('select_customer_page.php');
        }
     else if ($action == 'update_customer')
      {
        $custID = filter_input(INPUT_POST, 'customerID');
        $firstName = filter_input(INPUT_POST, 'firstName');
        $lastName = filter_input(INPUT_POST, 'lastName');
        $address = filter_input(INPUT_POST, 'address');
        $city = filter_input(INPUT_POST, 'city');
        $state = filter_input(INPUT_POST, 'state');
        $postalCode = filter_input(INPUT_POST, 'postalCode');
        $countryCode = filter_input(INPUT_POST, 'countryCode');
        $phone = filter_input(INPUT_POST, 'phone');
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        update_customer($custID, $firstName, $lastName, $address, $city,
                                  $state, $postalCode, $countryCode, $phone,
                                  $email, $password);
        $LastName = get_customers();
        include('select_customer_page.php');
        }


 ?>
