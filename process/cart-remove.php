<?php
    require '../helpers/config.php';
    
    $item_id = filter_input(INPUT_GET,'id'); 
    $user_id = $_SESSION['id'];

    $query = "DELETE FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' ";
    $res = mysqli_query($conn, $query) or die($mysqli_error($conn));
    
    header("location:../views/cart.php");
?>