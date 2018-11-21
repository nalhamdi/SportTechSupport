<?php include '../view/header.php'; ?>

<main>
    <h1>Add Product</h1>
    <form id="aligned" action="index.php" method="post">
        <input type="hidden" name="action" value="add_technician">

        <label for="">TechID: </label>
        <input type="text" name="techID"><br>

        <label for="">First Name: </label>
        <input type="text" name="firstName"><br>

        <label for="">Last Name: </label>
        <input type="text" name="lastName" required><br>

        <label for="">Email: </label>
        <input type="email" name="email" required><br>

        <label for="">Phone: </label>
        <input type="text" name="phone" required><br>

        <label for="">Password: </label>
        <input type="password" name="password" required><br>

        <label for="">&nbsp;</label>
        <input type="submit" value="Add Technician"><br>
    </form><!--end of form -->
    <p>
        <a href="?action=list_technicians">
            View Technician List</a>
    </p>
</main><!--end of main -->

<?php include '../view/footer.php'; ?>
