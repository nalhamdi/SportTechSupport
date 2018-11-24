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
        return $products;
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

?>
