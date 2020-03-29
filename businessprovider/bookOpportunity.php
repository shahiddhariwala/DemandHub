<?php

$conn = mysqli_connect('localhost','root','','demandhub');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$collab=$_POST['collab'];
$service=$_POST['service'];
$area=$_POST['area'];

// This will remove it from feed
if ($collab==0) {
  $sqlu="UPDATE `$service` SET `lookingflag`= 1 WHERE `area`='$area';";
}
else
{
  $sqlu="UPDATE `$service` SET `lookingflag`= 0 WHERE `area`='$area';";
}
$atm=mysqli_query($conn,$sqlu);

//Locked Table
$sql="INSERT INTO `collab`(`name`, `email`, `mobile`, `service`, `area`, `collaborate`) VALUES ('$name','$email','$mobile','$service','$area',$collab);";

if (mysqli_query($conn, $sql)) {


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if($collab==0)
{
  echo "<script type='text/javascript'>alert('Locked Succesfully!');</script>";
  header('refresh:2; url=feed.php');
}
else {
  echo "<script type='text/javascript'>alert('Checking for Partners!');</script>";
  header('refresh:2; url=collaborate.php');
}

mysqli_close($conn);
?>
