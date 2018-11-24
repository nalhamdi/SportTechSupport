<?php include '../view/header.php'; ?>

<main>
    <h1>Register Product</h1>
    <form id="aligned" action="index.php" method="post">
        <input type="hidden" name="action" value="register_product">

        <label for="">Customer: </label>
        <input type="hidden" name="">
        <?php 
            if(isset($user['firstName']) && isset($user['lastName']))
                echo $user['firstName'] . " " . $user['lastName'];
            else echo "0 results"  ?>
            
        <br> <!-- full name goes here-->

        <label for="">Pro
        duct: </label>
        <select name="productCode" >
            <!-- product list goes here -->
        </select><br>

        <label for="">&nbsp;</label>
        <input type="submit" value="Register Product" >
    </form><!--end of form -->
</main><!--end of main -->

<?php include '../view/footer.php'; ?>
