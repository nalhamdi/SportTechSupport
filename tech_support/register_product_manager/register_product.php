<?php include '../view/header.php'; ?>

<main>
    <h1>Register Product</h1>
    <form action="index.php" method="post">
      <label for="">Customer: </label>
        <label for="">Product: </label>
        <input type="email" name="email" required>
        <input type="hidden" name="action"
                value="grab_emails">
        <input type="submit" value="Login">
    </form><!--end of form -->
</main><!--end of main -->

<?php include '../view/footer.php'; ?>
