<?php include '../view/header.php'; ?>

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
            <td><form method="post">
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
        <!-- <form method="get">
            <input type="submit" name="action" value="show_add_form">
        </form>             -->
        <a href="?action=show_add_form">Add Products</a>
    </p>
</main><!-- end of main -->

<?php include '../view/footer.php' ?>
