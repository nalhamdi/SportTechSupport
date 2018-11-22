<?php include '../view/header.php'; ?>

<main>
    <h1>Customer Login</h1>
    <p> You must login before you can register a product. </p>
    <form action="index.php" method="post">
        <label for="">Email: </label>
        <input type="email" name="email" required>
        <input type="hidden" name="action"
                value="grab_emails">
        <input type="submit" value="Login">

    </form><!--end of form -->
    <p>
        <a href="?action=list_products">
            View Product List</a>
    </p>
</main><!--end of main -->

<?php include '../view/footer.php'; ?>
