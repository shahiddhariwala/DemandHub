<?php

$conn = mysqli_connect('localhost','root','','demandhub');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['name'];
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];


$sql="INSERT INTO `demandhubconsumer`(`name`, `username`, `mobile`, `email`, `password`) VALUES ('$name','$username','$mobile','$email','$password');";

if (mysqli_query($conn, $sql)) {
    header('refresh:2; url=consumer/consumerindex.html');
    echo "<script type='text/javascript'>alert('Registered Succesfully!');</script>";

} else {
    echo "Something Went Wrong!! ";
}

mysqli_close($conn);
?>
