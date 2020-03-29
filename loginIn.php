<?php

$conn = mysqli_connect('localhost','root','','demandhub');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstname=$_POST['username'];
$passwordch=$_POST['password'];
$userprofile=$_POST['user'];
echo '<script type="text/JavaScript">
     localStorage.setItem("myCat", "Tom");
     </script>'
;

if($userprofile=='customer')
{
  $sql ="Select * FROM demandhubconsumer where username='$firstname' and password='$passwordch'";
  $result=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($result);
  if ($count==1) {
        echo "<script type='text/javascript'>alert('Logged Succesfully!');</script>";
        header('refresh:2; url=consumer/consumerindex.html');
  } else {

      echo "<script type='text/javascript'>alert('Username or Password incorrect!');</script>";
      header('refresh:2; url=../login.html');
  }

}
else
{
  $sql ="Select * FROM demandhubbusiness where username='$firstname' and password='$passwordch'";
  $result=mysqli_query($conn,$sql);
  $count=mysqli_num_rows($result);


  if ($count==1) {
      echo "<script type='text/javascript'>alert('Logged Succesfully!');</script>";
      header('refresh:2; url=businessprovider/businessindex.html');
  } else {

  echo "<script type='text/javascript'>alert('Username or Password incorrect!');</script>";
  header('refresh:2; url=../login.html');
}
  
}


ob_end_flush();
?>
