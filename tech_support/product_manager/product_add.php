<?php include '../view/header.php'; ?>

<main>
    <h1>Add Product</h1>
    <form id="aligned" action="index.php" method="post">
        <input type="hidden" name="action" value="add_product">
        
        <label for="">Code: </label>
        <input type="text" name="productCode"><br>

        <label for="">Name: </label>
        <input type="text" name="name"><br>

        <label for="">  Version: </label>
        <input type="number" step="0.1" name="version" required><br>

        <label for="">Release Date: </label>
        <input type="datetime" name="releaseDate" required>
        <label class="message">use yyyy-mm-dd format</label>

        <label for="">&nbsp;</label>
        <input type="submit" value="Add Product"><br>
    </form><!--end of form -->
    <p>
        <a href="?action=list_products">
            View Product List</a>
    </p>
</main><!--end of main -->

<?php include '../view/footer.php'; ?>