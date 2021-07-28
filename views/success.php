<?php 
    require '../helpers/config.php';
    if (!isset($_SESSION['email'])) { header('location: ../index.php'); }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Success Lifestyle Store</title>
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
                <div class="jumbotron" style="margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);">
                    <?php
                    $id=$_SESSION['id'];
                    $success_query="update users_items set status='confirmed' where user_id=$id";
                    $success_query_result=mysqli_query($conn,$success_query) or die("Some error occurred.");
                    ?>
                    <h1>Your order is confirmed.</h1>
                    <p>Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</p>
                </div>
            </div>   
        </div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>