<?php

    function get_customers_by_email($email){
        global $db;
        $query = 'SELECT * FROM customers
                WHERE email = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $email;
    }

    function get_products_code(){
        global $db;
        $query = 'SELECT productCode FROM products';
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }

    function get_products(){
      global $db;
      $query = 'SELECT * FROM products';
      $statement = $db->prepare($query);
      $statement->execute();
      $productsName = $statement->fetchAll();
      $statement->closeCursor();
      return $productsName;
    }

    function get_username($email){
        global $db;
        $query = 'SELECT firstName, lastName FROM customers
                  WHERE email = :email';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();
        return $user;
    }

    function get_custID($email){
      global $db;
      $query = 'SELECT customerID FROM customers
                WHERE email = :email';
      $statement = $db->prepare($query);
      $statement->bindValue(':email', $email);
      $statement->execute();
      $custID = $statement->fetch();
      $statement->closeCursor();
      return $custID;
    }

    function register_product($custID, $productCode, $registrationDate){
      global $db;
      $query = 'INSERT INTO registrations(customerID, productCode,
         registrationDate)
         VALUES (:custID, :productCode, :registrationDate)' ;
      $statement = $db->prepare($query);
      $statement->bindValue(':custID', $custID);
      $statement->bindValue(':productCode', $productCode);
      $statement->bindValue(':registrationDate', $registrationDate);
      $statement->execute();
      $user = $statement->fetch();
      $statement->closeCursor();
    }

?>
