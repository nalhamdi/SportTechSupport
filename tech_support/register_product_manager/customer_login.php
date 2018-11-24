<?php include '../view/header.php'; ?>

<main>
    <h1>Customer Login</h1>
    <p> You must login before you can register a product. </p>
    <form method="post">
        <input type="hidden" name="action" value="user_login">
        
        <label for="">Email: </label>
        <input type="email" name="email" required>
        <input type="submit" value="Login">
    </form><!--end of form -->

</main><!--end of main -->

<?php include '../view/footer.php'; ?>
