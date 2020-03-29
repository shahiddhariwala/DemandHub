<?php

$conn = mysqli_connect('localhost','root','','demandhub');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$tablename=$_POST['service'];
$area=$_POST['area'];

$sql="UPDATE `$tablename` SET `counter`=`counter`+1 WHERE `area`='$area';";

if (mysqli_query($conn, $sql)) {

    echo "<script type='text/javascript'>alert('Requested Succesfully!');</script>";
    header('refresh:1;url=services.html');
} else {
    echo "Something Went Wrong!! ";
}

mysqli_close($conn);
?>
