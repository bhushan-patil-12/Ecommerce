<?php
    include '../helpers/config.php';
    if(!isset($_SESSION['email']))
    {
        header('location: ../index.php');
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

<!--main form-->
<div class="container settings_cont"> 
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form  method="post" action="../process/settings_script.php">
            <h2>Change Password</h2><br>
            <div class="form-group">
            <input type="text" class="form-control" name="old" placeholder="Old Password" required>
            </div>

            <div class="form-group">
            <input type="text" class="form-control" name="new" placeholder="New Password" required>
            </div>
                
            <div class="form-group">
            <input type="text" class="form-control" name="retype" placeholder="Re-type New Password" required>
            </div>
            <br>
            <button class="btn btn-primary">Change</button>
        </form>
        </div>
    </div>
</div>

    <!-- Footer-->
    <?php
        include 'footer.php';
    ?>
    
    </body>
</html>