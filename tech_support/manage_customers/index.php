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
      $LastName = NULL;
      if($LastName == NULL)
      {
        $LastName = 1;
      }

      $LastName = get_customer_by_lastName($LastName);
      $customers = get_customers();
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
 ?>
