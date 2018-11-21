<?php
    function get_technicians(){
        global $db;
        $query = 'SELECT * FROM technicians
                  ORDER BY techID';
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }

    function get_products_by_id($techID){
        global $db;
        $query = 'SELECT * FROM technicians
                  WHERE techID = :techID';
        $statement = $db->prepare($query);
        $statement->bindValue(':techID', $techID);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }

    function delete_product($techID) {
        global $db;
        $query = 'DELETE FROM technicians
                  WHERE techID = :techID';
        $statement = $db->prepare($query);
        $statement->bindValue(':techID', $techID);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_technicians($productCode, $name, $version, $releaseDate){
        global $db;
        $query = 'INSERT INTO technicians
                    (techID, firstName, lastName, email, phone, password)
                  VALUES
                    (:techID, :firstName, :lastName, :email, :phone, :password)';
        $statement = $db->prepare($query);
        $statement->bindValue(':techID', $techID);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone', $phone);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
    }
?>
