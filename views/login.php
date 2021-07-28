<?php
     require "../helpers/config.php";
     if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index Page</title>
        <link href="../assets/Bootstrap/css/bootstrap.min.css" rel="Stylesheet" type="text/css"/>
        <script type="text/javascript" src="../assets/Bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../assets/Bootstrap/js/bootstrap.min.js"></script>       
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
<body>

<?php
        include 'header.php';
    ?>


<div class="container login_cont"> 
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <div class="panel panel-primary">
                <div class="panel-body text-warning">
                    <p>
                        <center><h2>Login to make a purchase</h2></center><br>
                    </p>
                    <form method="post" action="../process/login_submit.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="Email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required ><br>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="Password" placeholder="Password" required><br>
                        </div>   
                        <br>
                        <center><button class="btn btn-primary btn-primary-s">Login</button></center><br><br>
                    </form>
                </div>
            <div class="panel-footer">
                <center> Don't have an account? <a href="signup.php"> Register </a>  </center>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</div> 

    <!-- Footer-->
    <?php
        include "footer.php";
    ?>         

</body>
</html>