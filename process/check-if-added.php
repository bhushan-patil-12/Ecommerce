<?php
    require_once '../helpers/config.php';

    function check_if_added_to_cart($conn,$item_id,$user_id){
        $added_to_cart_query="select * from users_items where item_id='$item_id' and user_id ='$user_id' and status='added to cart'";
        $added_to_cart_result=mysqli_query($conn,$added_to_cart_query)or die(mysqli_error($conn));
        
        if (mysqli_num_rows($added_to_cart_result) >= 1){
            return 1;
        }
        else {
            return 0;
        }
    }
?>