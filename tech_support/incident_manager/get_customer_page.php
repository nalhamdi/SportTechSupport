<?php include '../view/header.php'; ?>

<main>
    <h1>Get Customer</h1>
    <p> You must enter the customer's email address to select the customer. </p>
    <form method="post">
        <input type="hidden" name="action" value="user_login">

        <label for="">Email: </label>
        <input type="email" name="email" required>
        <input type="submit" value="Login">
    </form><!--end of form -->
</main><!--end of main -->

<?php include '../view/footer.php'; ?>
