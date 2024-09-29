<?php 

    echo "form submitted";

    $id = $_POST['tid'];
    $name = $_POST['tname'];
    $phone = $_POST['tphone'];
    $email = $_POST['temail'];
    $bg = $_POST['tbg'];
    $address = $_POST['taddress'];

    // echo $id . "<br>";
    // echo $name . "<br>";
    // echo $phone . "<br>";
    // echo $email . "<br>";
    // echo $bg . "<br>";
    // echo $address . "<br>";

    $conn = mysqli_connect('localhost','root','','jsths') or die('Error'. mysqli_connect_error());

    $sql = "INSERT INTO teachers(id, name, phone, email, blood_group, address) VALUES('$id', '$name', '$phone', '$email', '$bg', '$address')";

    $result = mysqli_query($conn, $sql) or die("". mysqli_error($conn));

    header("Location: index.php")
    
?>