<?php 
    require '../helpers/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product Lifestyle Store</title>
        <link href="../assets/Bootstrap/css/bootstrap.min.css" rel="Stylesheet" type="text/css"/>
        <script type="text/javascript" src="../assets/Bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../assets/Bootstrap/js/bootstrap.min.js"></script> 
        <link href="../assets/css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            include 'header.php';
            include '../process/check-if-added.php';
        ?>
        <div class="container">
            <div class="jumbotron" style="margin-top: 80px;">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>

            <div id="Cameras" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/canon-dslr.jpg" alt="camera"/>
                    <div class="caption">
                        <h3>Canon EOS</h3> 
                        <p>Price:Rs.36000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,1,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/nikon-dslr.jpg" alt="camera"/>
                    <div class="caption">
                        <h3>Nikon DSLR</h3> 
                        <p>Price:Rs.40000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,2,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/sony-dslr.jpg" alt="camera"/>
                    <div class="caption">
                        <h3>Sony DSLR</h3> 
                        <p>Price:Rs.45000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,3,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>   
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/olympus-dslr.jpg" alt="camera"/>
                    <div class="caption">
                        <h3>Olympus DSLR</h3> 
                        <p>Price:Rs.50000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,4,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>                       
            </div>
            <div id="Watches" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/titan-model-301.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>Titan Model #301</h3> 
                        <p>Price:Rs.13000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,5,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/titan-model-201.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>Titan model $201</h3> 
                        <p>Price:Rs.3000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,6,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/hmt-milan.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>HMT Milan</h3> 
                        <p>Price:Rs.8000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,7,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>   
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/faber-luba.jpg" alt="watch"/>
                    <div class="caption">
                        <h3>Faber Luba #111</h3> 
                        <p>Price:Rs.18000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,8,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>                       
            </div>  
            <div id="Shirts" class="row text-center">
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/h-w.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>H&W</h3> 
                        <p>Price:Rs.800.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,9,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/luis-phil.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Luis Phil</h3> 
                        <p>Price:Rs.1000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,10,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/john-zok.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>John Zok</h3> 
                        <p>Price:Rs.1500.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,11,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>   
                <div class="col-md-3 col-sm-6 thumbnail">
                    <img src="../assets/images/jhalsani.jpg" alt="shirt"/>
                    <div class="caption">
                        <h3>Jhalsani</h3> 
                        <p>Price:Rs.1300.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php } else { if (check_if_added_to_cart($conn,12,$_SESSION['id'])){
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; } else { ?> 
                        <a href="../process/cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php } } ?>
                    </div>
                </div>                       
            </div>            
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>