<?php

    function get_products(){
        global $db;
        $query = 'SELECT * FROM products
                  ORDER BY productCode';
        $statement = $db->prepare($query);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }

    function get_products_by_code($productCode){
        global $db;
        $query = 'SELECT * FROM products
                  WHERE productCode = :productCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $productCode);
        $statement->execute();
        $products = $statement->fetchAll();
        $statement->closeCursor();
        return $products;
    }

    function delete_product($productCode) {
        global $db;
        $query = 'DELETE FROM products
                  WHERE productCode = :productCode';
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $productCode);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_product($productCode, $name, $version, $releaseDate){
        global $db;
        $query = 'INSERT INTO products
                    (productCode, name, version, releaseDate)
                  VALUES
                    (:productCode, :name, :version, :releaseDate)';
        $statement = $db->prepare($query);
        $statement->bindValue(':productCode', $productCode);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':version', $version);
        $statement->bindValue(':releaseDate', $releaseDate);
        $statement->execute();
        $statement->closeCursor();
    }
?>