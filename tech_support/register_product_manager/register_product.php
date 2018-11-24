<?php include '../view/header.php'; ?>

<main>
    <h1>Register Product</h1>
    <form id="aligned" action="index.php" method="post">
        <input type="hidden" name="action" value="register_product">

        <label for="">Customer: </label>
        <input type="text" name=""><br> <!-- full name goes here-->

        <label for="">Product: </label>
        <input type="email" name="email" required>

        <input type="hidden" name="action"
                value="grab_emails">
        <input type="submit" value="Register Product" style="margin-left: 5px;">
    </form><!--end of form -->
</main><!--end of main -->

<?php include '../view/footer.php'; ?>
