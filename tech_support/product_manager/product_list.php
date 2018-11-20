<?php include '../view/header.php'; ?>

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
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Version</th>
                <th>Release Date</th>
            </tr>
            <?php foreach ($productCode as $product) : ?>
            <tr>
                <!-- show product records -->
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['version']; ?></td>
                <td><?php echo $product['releaseDate']; ?></td>
                <!-- delete specific record -->
                <td><form action="." method="post">
                        <input type="hidden" name="action"
                                value="delete_product">
                        <input type="hidden" name="productCode"
                                value="<?php 
                                    echo $product['productCode'];
                                ?>">
                        <input type="submit" value="Delete">
                    </form><!-- end of form -->
                </td>
            </tr>
            <?php endforeach; ?>
        </table><!-- end of table -->
        <p>
            <a href="?action=show_add_form">Add Product</a>
        </p>
    </main><!-- end of main -->
    
    <?php include '../view/footer.php' ?>
</body>
</html>