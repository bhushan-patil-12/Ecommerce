<?php
    require '../helpers/config.php';

    $name = mysqli_real_escape_string($conn,$_POST['Name']);
    $email = mysqli_real_escape_string($conn,$_POST['Email']);
    $password = $_POST['Password'];
    $contact = mysqli_real_escape_string($conn,$_POST['Contact']);
    $city = mysqli_real_escape_string($conn,$_POST['City']);
    $address = mysqli_real_escape_string($conn,$_POST['Address']);

    $user_registration = "insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$contact','$city','$address')";
    $user_registration_submit = mysqli_query($conn, $user_registration);
    
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($conn);

    header('location: ../views/products.php');

?>