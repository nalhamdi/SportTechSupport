<?php include '../view/header.php'; ?>

<main>
    <table>
        <tr>
            <th>TechID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Password</th>
        </tr>
        <?php foreach ($techID as $tech) : ?>
        <tr>
            <!-- show product records -->
            <td><?php echo $tech['techID']; ?></td>
            <td><?php echo $tech['firstName']; ?></td>
            <td><?php echo $tech['lastName']; ?></td>
            <td><?php echo $tech['email']; ?></td>
            <td><?php echo $tech['phone']; ?></td>
            <td><?php echo $tech['password']; ?></td>
            <!-- delete specific record -->
            <td><form method="post">
                    <input type="hidden" name="action"
                            value="delete_technician">
                    <input type="hidden" name="techID"
                            value="<?php
                                echo $tech['techID'];
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
        <a href="?action=show_add_form">Add Technicians</a>
    </p>
</main><!-- end of main -->

<?php include '../view/footer.php' ?>
