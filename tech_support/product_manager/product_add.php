<?php include 'view/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../main.css">
</head>
<body>

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
            <input type="datetime" name="releaseDate" required><br>

            <label for="">&nbsp;</label>
            <input type="submit" value="Add Product"><br>
        </form><!--end of form -->
        <p>
            <a href="index.php?action=list_products">
                View Product List</a>
        </p>
    </main><!--end of main -->

    <?php include 'view/footer.php'; ?>
</body>
</html>