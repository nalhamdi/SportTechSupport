<?php include '../view/header.php';?>

<main>
  <h1>Customer Search</h1>
  <from method ="post">
    <input type = "hidden" name = "action" value = ""

    <label for = "">Last Name: </label>
    <input type = "lastName" name = "lastName" required>
    <input type = "submit" value = "Search">
  </from>

  <table>
    <h1>Result</h1>
    <tr>
      <th>Name</th>
      <th>Email Address</th>
      <th>City</th>
    </tr>

    <?php if($LastName == false){
      $LastName = $customers;
    }
    var_dump($customers);
      ?>


      <tr>
        <td><?php echo $LastName['firstName']; ?></td>
        <td><?php echo $LastName['lastName']; ?></td>
        <td><?php echo $LastName['city']; ?></td>
        <td><form method = "post">
          <input type="hidden" name="action"
                  value="view_customer">
          <input type="hidden" name="custID"
                  value="<?php
                      echo $LasName['customerID'];
                  ?>">
          <input type="submit" value="Select">
        </form>

        </td>
        <tr>


    </table>
</main>
<?php include '../view/footer.php';?>
