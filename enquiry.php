<?php
include 'connect.php';
if (isset($_POST['phone'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $query = "insert into clients(name,email,phone,message) values('$name','$email','$phone','$message')";
    if (mysqli_query($conn, $query)) {
        echo "OK";
    } else {
        echo "Network error";
    }
    mysqli_close($conn);
} else {
    echo "All feilds mandatory";
}
?>