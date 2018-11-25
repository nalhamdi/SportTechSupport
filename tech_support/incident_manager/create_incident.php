<?php include '../view/header.php'; ?>

<main>
    <h1>Create Incident</h1>
    <form id="aligned" action="index.php" method="post">
    <input type="hidden" name="action" value="create_incident">

    <label for="">Customer: </label>
    <input type="hidden" name="">
    <?php
        if(isset($user['firstName']) && isset($user['lastName']))
            echo $user['firstName'] . " " . $user['lastName'];
        else echo "0 results"  ?>
    <br> <!-- full name goes here-->

    <label for="">Product: </label>

    <!-- product list goes here -->
    <select name="productsName" >
        <?php foreach ($products as $product):?>
            <option value = "<?php echo $product["productCode"]; ?>">
               <?php echo $product["name"];?>
            </option>
        <?php endforeach; ?>
    </select><br>

    <label for="">Title: </label>
    <input type="text" name="title"><br>
  </br>

    <label for="">Description: </label>
    <textarea name="description" cols="40" rows="5"></textarea>

    <label for="">&nbsp;</label>
    <input type="submit" value="Create Incident"><br>

  </br>
</form>
</main><!--end of main -->

<?php include '../view/footer.php'; ?>
