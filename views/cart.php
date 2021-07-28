<?php
    require("../helpers/config.php");
    if (!isset($_SESSION['email'])) {
        header('location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Cart</title>
        <link href="../assets/Bootstrap/css/bootstrap.min.css" rel="Stylesheet" type="text/css"/>
        <script type="text/javascript" src="../assets/Bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../assets/Bootstrap/js/bootstrap.min.js"></script> 
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php 
        include 'header.php'; 
        ?>
        <div id="banner_image" style="height: 620px;margin-bottom: 0px;">
            <div class="container">
                <div class="row decor_bg">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-responsive table-hover table-condensed" style="background-color: rgba(255, 255, 255, 0.7);font-size:20px;color:#000000;margin-top:100px">
                            <?php
                                $sum = 0;
                                $user_id = $_SESSION['id'];
                                $query = "SELECT items.price AS Price, items.pid, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id='$user_id' and status='added to cart'";
                                $result = mysqli_query($conn, $query)or die(mysqli_error($conn));
                                if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        $sum+= $row["Price"];
                                        echo "<tr><td>" .$row["Name"] . "</td><td>Rs " .$row["Price"] . "</td><td><a href='../process/cart-remove.php?id={$row['pid']}' class='remove_item_link' > Remove</a></td></tr>";
                                    }
                                    echo "<tr><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                                } else {
                                echo "<center class='jumbotron'style='margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);'><h2 style='color:#ff0000;'>Add items to the cart first!</h1><p>Flat 10% OFF on premium brands</p><a href='products.php' class='btn btn-danger btn-lg active'>Shop Now</a></center>";
                                }
                            ?>
                            <?php
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
        <?php 
            include("footer.php"); 
        ?>
    </body>
</html>