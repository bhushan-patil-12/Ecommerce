<?php
    require '../helpers/config.php';

    $user_id=$_SESSION['id'];
    $item_id= filter_input(INPUT_GET,'id');

    $add_to_cart_query="insert into users_items(user_id, item_id, status) values('$user_id', '$item_id', 'added to cart')";
    mysqli_query($conn, $add_to_cart_query)or die(mysqli_error($conn));
    
    header('location:../views/products.php');
?>