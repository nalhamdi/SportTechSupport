<?php

  function get_customer_by_lastName($lastName)
  {
    global $db;
    $query = 'SELECT * FROM customers WHERE lastName = :lastName';
    $statement = $db -> prepare($query);
    $statement-> bindValue(':lastName' , $lastName);
    $statement-> execute();
    $user = $statement->fetchAll();
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
    $query = 'SELECT * FROM customers
              ORDER BY customerID';
    $statement = $db -> prepare($query);
    $statement-> execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
  }

  function update_customer($custID, $firstName, $lastName, $address, $city,
         $state, $pc, $cc, $phone, $email, $password){
    global $db;
    $query = 'UPDATE customers
              SET firstName = :firstName,
              lastName = :lastName,
              address = :address,
              city = :city,
              state = :state,
              postalCode = :postalCode,
              countryCode = :countryCode,
              phone = :phone,
              email = :email,
              password = :password
              WHERE customerID = :custID ';
    $statement = $db -> prepare($query);
    $statement-> bindValue(':custID' , $custID);
    $statement-> bindValue(':firstName' , $firstName);
    $statement-> bindValue(':lastName' , $lastName);
    $statement-> bindValue(':address' , $address);
    $statement-> bindValue(':city' , $city);
    $statement-> bindValue(':state' , $state);
    $statement-> bindValue(':postalCode' , $pc);
    $statement-> bindValue(':countryCode' , $cc);
    $statement-> bindValue(':phone' , $phone);
    $statement-> bindValue(':email' , $email);
    $statement-> bindValue(':password' , $password);
    $statement-> execute();
    $statement->closeCursor();
  }


 ?>
