<?php
    include '../helpers/config.php';
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Index Page</title>
        <link href="../assets/Bootstrap/css/bootstrap.min.css" rel="Stylesheet" type="text/css"/>
        <script type="text/javascript" src="../assets/Bootstrap/js/bootstrap.min.js"></script>       
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <?php
        include 'header.php';
    ?>


    <div class="container signup_cont"> 
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form method="post" action="../process/signup_script.php">
                <h1>SIGN UP</h1>
                <div class="form-group">
                    <input type="text" class="form-control" name="Name" placeholder="Name" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="Email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="Password" placeholder="Password" required="true" pattern=".{6,}">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="Contact" placeholder="Contact" pattern=".{10}" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="City" placeholder="City" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="Address" placeholder="Address" required>
                </div>

                <button class="btn btn-primary">Submit</button>
               
                </form>
            </div>
        </div>
    </div>
    
        <?php
            include 'footer.php';
        ?>
</body>
</html>