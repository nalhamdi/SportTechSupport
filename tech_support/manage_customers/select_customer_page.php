<?php include '../view/header.php';?>

<main>
  <h1>Customer Search</h1>
  <form method ="post">
    <input type = "hidden" name = "action" value = "search_last_name">

    <label for = "">Last Name: </label>
    <input type = "lastName" name = "lastName" required>
    <input type = "submit" value = "Search">
  </form>

  <table>
    <h1>Result</h1>
    <tr>
      <th>Name</th>
      <th>Email Address</th>
      <th>City</th>
    </tr>



 <?php foreach ($LastName as $customer) : ?>
      <tr>
        <td><?php echo $customer['firstName']; ?></td>
        <td><?php echo $customer['lastName']; ?></td>
        <td><?php echo $customer['city']; ?></td>
        <td><form method = "post">
          <input type="hidden" name="action"
                  value="view_customer">
          <input type="hidden" name="custID"
                  value="<?php
                      echo $customer['customerID'];
                  ?>">
          <input type="submit" value="Select">
        </form>

        </td>
        <tr>

<?php endforeach; ?>
    </table>
</main>
<?php include '../view/footer.php';?>
