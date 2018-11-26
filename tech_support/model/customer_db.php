<?php

  function get_customer_by_lastName($LastName)
  {
    global $db;
    $query = 'SELECT * FROM customers WHERE LastName = :LastName';
    $statement = $db -> prepare($query);
    $statement-> bindValue(':LastName' , $LastName);
    $statement-> execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
  }

  function get_customer_by_ID($custID)
  {
    global $db;
    $query = 'SELECT * FROM customers WHERE customerID = :custID';
    $statement = $db -> prepare($query);
    $statement-> bindValue(':custID' , $custID);
    $statement-> execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
  }

  function get_customers(){
    global $db;
    $query = 'SELECT * FROM customers';
    $statement = $db -> prepare($query);
    $statement-> execute();
    $customers = $statement->fetch();
    $statement->closeCursor();
    return $customers;
  }
  function update_customer($firstName, $lastName, $address, $city, $state, $pc, $cc, $phone, $email, $password){
    global $db;
    $query = '';
    $statement = $db -> prepare($query);
    $statement-> bindValue(':LastName' , $firstName);
    $statement-> bindValue(':LastName' , $lastName);
    $statement-> bindValue(':LastName' , $address);
    $statement-> bindValue(':LastName' , $city);
    $statement-> bindValue(':LastName' , $state);
    $statement-> bindValue(':LastName' , $LastName);
    $statement-> execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
  }


 ?>
