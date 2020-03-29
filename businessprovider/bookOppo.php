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
    echo "<script type='text/javascript'>alert('Locked Succesfully!');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



if ($collab==1) {
    echo "<script type='text/javascript'>alert('Checking for Business Partners!');</script>";
    $sqlcollab="SELECT * FROM collab WHERE `collaborate`=1 and `area`='$area' and 'service'=`$service`;";
    $dost=mysqli_query($conn,$sqlcollab);

    echo "<div style='text-align:center;'>";
    echo "Following is List of Possible Business Partner";
    echo "</div>";

    echo "<table align='center' border='1px' style='color:black;'>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Service</th>
        <th>Area</th>
      </tr>";
    while($rows=mysqli_fetch_assoc($atm))
    {
      $namee=$dost['name'];
      $emaile=$dost['email'];
      $mobilee=$dost['mobile'];
      $servicee=$dost['service'];
      $areae=$dost['area'];
    echo "<tr>";
    echo  "<td>$namee</td>";
    echo  "<td>$emaile</td>";
    echo  "<td>$mobilee</td>";
    echo  "<td>$servicee</td>";
    echo  "<td>$areae</td>";
     echo "</tr>";
   }
   echo "<div style='text-align:center;'>";
   echo "<h1>Thank you for using DemandHub</h1><br>";
   echo "<a href='businessindex.html'><h1>Click Here to go back</h1></a>";
   echo "</div>";
} else {
    echo "<div style='text-align:center;'>";
    echo "<h1>Thank you for using DemandHub</h1><br>";
    echo "<a href='businessindex.html'><h1>Click Here to go back</h1></a>";
    echo "</div>";
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <style>
  .accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
  }

  .active, .accordion:hover {
    background-color: #ccc;
  }

  .accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }

  .active:after {
    content: "\2212";
  }

  .panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  </style>
</head>
 <title>Locked</title>
 <body>


 </body>
 </html>
