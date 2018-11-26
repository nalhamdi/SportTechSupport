<?php include '../view/header.php'; ?>

<main>

  <h1>View/Update Customer</h1>
  <form id = "aligned" action = "index.php" method = "post">
    <input type = "hidden" name = "action" value = "update_customer">
    <input type = "hidden" name = "customerID" value = "<?php echo $user['customerID']?>">
    <label for =" ">First Name: </label>
    <input type = "text" value = " <?php echo $user['firstName']?>" name = "firstName"><br>

    <label for =" ">Last Name: </label>
    <input type = "text" value = " <?php echo $user['lastName']?>"name = "lastName" required><br>

    <label for =" ">Address: </label>
    <input type = "text" value = " <?php echo $user['address']?>"name = "address"><br>

    <label for =" ">City: </label>
    <input type = "text" value = " <?php echo $user['city']?>" name = "city"><br>

    <label for =" ">State: </label>
    <input type = "text" value = " <?php echo $user['state']?>" name = "state"><br>

    <label for =" ">Postal Code: </label>
    <input type = "text" value = " <?php echo $user['postalCode']?>" name = "postalCode"><br>

    <label for =" ">Country Code: </label>
    <input type = "text" value = " <?php echo $user['countryCode']?>" name = "countryCode"><br>

    <label for =" ">Phone: </label>
    <input type = "text" value = " <?php echo $user['phone']?>" name = "phone"><br>

    <label for =" ">Email: </label>
    <input type = "text"value = " <?php echo $user['email']?>"  name = "email"><br>

    <label for =" ">Password: </label>
    <input type = "password" value = " <?php echo $user['password']?>"  name = "password"><br>

    <label for =" ">&nbsp;</label>
    <input type = "submit" value = "Update Customer"><br>
</from>

<p>

  <a href="?action =select_customer">
  Search Customer</a>
</p>

</main>

<?php include '../view/footer.php'; ?>
