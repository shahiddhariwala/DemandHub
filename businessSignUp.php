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


$sql="INSERT INTO `demandhubbusiness`(`name`, `username`, `mobile`, `email`, `password`) VALUES ('$name','$username','$mobile','$email','$password');";
if (mysqli_query($conn, $sql)) {

    echo "<script type='text/javascript'>alert('Registered Succesfully!');</script>";
    header('Refresh:2;url=businessprovider/businessindex.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
