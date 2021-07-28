<?php
    require "helpers/config.php";
    if (isset($_SESSION["email"])) {
        header("location: views/products.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index Page</title>
        <link href="assets/Bootstrap/css/bootstrap.min.css" rel="Stylesheet" type="text/css"/>
        <script type="text/javascript" src="assets/Bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="assets/Bootstrap/js/bootstrap.min.js"></script>      
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- header-->
        <div class="navbar navbar-inverse navbar-fixed-top">  
            <div class="container">
                <div class="navbar-header">      
                    <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">                
                    <span class="icon-bar"></span>                
                    <span class="icon-bar"></span>                
                    <span class="icon-bar"></span>                                    
                    </button>            
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>        
                </div>        
                <div class="collapse navbar-collapse" id="myNavbar">            
                    <ul class="nav navbar-nav navbar-right">                  
                        <li><a href="views/signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>                    
                        <li><a href="views/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>                                    
                    </ul>        
                </div>    
            </div> 
        </div> 
            
        <!-- Image -->
        <div id="banner_image">
            <div class="container" id="banner_content">
                <a href="views/products.php">
                    <button class="btn btn-danger btn-lg active"> Shop Now </button>
                </a>
            </div>
        </div>

        <!-- Footer-->
        <?php include "views/footer.php"; ?>

    </body>
</html>
