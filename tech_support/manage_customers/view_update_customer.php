<?php include '../view/header.php'; ?>

<main>

  <h1>View/Update Customer</h1>
  <from id = "aligned" action = "index.php" method = "post">
    <input type = "hidden" name = "action" value = "View_update_customer">

    <label for =" ">First Name: </label>
    <input type = "text" name = "firstName"><?php echo $user['firstName']?><br>

    <label for =" ">Last Name: </label>
    <input type = "text" name = "lastName" required><br>

    <label for =" ">Address: </label>
    <input type = "text" name = "address"><br>

    <label for =" ">City: </label>
    <input type = "text" name = "city"><br>

    <label for =" ">State: </label>
    <input type = "text" name = "state"><br>

    <label for =" ">Postal Code: </label>
    <input type = "text" name = "postalCode"><br>

    <label for =" ">Country Code: </label>
    <input type = "text" name = "countryCode"><br>

    <label for =" ">Phone: </label>
    <input type = "text" name = "phone"><br>

    <label for =" ">Email: </label>
    <input type = "text" name = "email"><br>

    <label for =" ">Password: </label>
    <input type = "text" name = "password"><br>

    <label for =" ">&nbsp;</label>
    <input type = "submit" value = "Update Customer"><br>
</from>

<p>

  <a href="?action =select_customer">
  Search Customer</a>
</p>

</main>

<?php include '../view/footer.php'; ?>
