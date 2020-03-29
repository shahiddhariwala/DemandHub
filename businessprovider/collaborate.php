<?php
$conn = mysqli_connect('localhost','root','','demandhub');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql ="Select * FROM collab where service = 'atm' and collaborate = 1";
$atm=mysqli_query($conn,$sql);

$sql ="Select * FROM collab where service = 'restaurant' and collaborate = 1";
$restaurant=mysqli_query($conn,$sql);

$sql ="Select * FROM collab where service = 'hospital' and collaborate = 1";
$hospital=mysqli_query($conn,$sql);

$sql ="Select * FROM collab where service = 'pharmacy' and collaborate = 1";
$pharmacy=mysqli_query($conn,$sql);

$sql ="Select * FROM collab where service = 'supermarket' and collaborate = 1";
$supermarket=mysqli_query($conn,$sql);

$sql ="Select * FROM collab where service = 'petrolpump' and collaborate = 1";
$petrolpump=mysqli_query($conn,$sql);

mysqli_close($conn);
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Collaborate</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
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
<body>
<div id="wrapper">
	<!-- start header -->
		<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse">
									<ul class="nav navbar-nav">
										<li >
												<a href="businessindex.html">Home</a>
										</li>

											<li >
													<a href="about.html">About Us</a>
											</li>

											<li >
													<a href="pricing.html">Pricing</a>
											</li>

                      <li >
													<a href="feed.php">Feed</a>
											</li>

											<li >
													<a href="contact.html">Contact</a>
											</li>
											<li>
													<a href="../login.html">Business Profile</a>
											</li>
									</ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->

	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">WANT TO COLLABORATE &#x1F4B8;</h2>
			</div>
		</div>
	</div>
	<section id="content">
	<div class="container">
		<!-- end divider -->
		<h3>Following are the possible business partner in chembur region &#127776; </h3>

		<button class="accordion">ATM</button>
		<div class="panel">

			<table align="center" border="1px" style="color:black;">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Service</th>
          <th>Area</th>
        </tr>
				<?php
				while($rows=mysqli_fetch_assoc($atm))
				{

				 ?>
				 <tr>
					 	  <td><?php echo $rows['name']?></td>
   					 	<td><?php echo $rows['email']?></td>
   						<td><?php echo $rows['mobile']?></td>
   					 	<td><?php echo $rows['service']?></td>
   						<td><?php echo $rows['area']?></td>
				 </tr>
			 <?php

			 }
			 ?>


			</table>

		</div>

		<button class="accordion">HOSPITAL</button>
		<div class="panel">
      <table align="center" border="1px" style="color:black;">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Service</th>
          <th>Area</th>
        </tr>
				<?php
				while($rows=mysqli_fetch_assoc($hospital))
				{

				 ?>
				 <tr>
					 	  <td><?php echo $rows['name']?></td>
   					 	<td><?php echo $rows['email']?></td>
   						<td><?php echo $rows['mobile']?></td>
   					 	<td><?php echo $rows['service']?></td>
   						<td><?php echo $rows['area']?></td>
				 </tr>
			 <?php

			 }
			 ?>


			</table>
			 		</div>

		<button class="accordion">RESTAURANT</button>
		<div class="panel">
      <table align="center" border="1px" style="color:black;">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Service</th>
          <th>Area</th>
        </tr>
				<?php
				while($rows=mysqli_fetch_assoc($restaurant))
				{

				 ?>
				 <tr>
					 	  <td><?php echo $rows['name']?></td>
   					 	<td><?php echo $rows['email']?></td>
   						<td><?php echo $rows['mobile']?></td>
   					 	<td><?php echo $rows['service']?></td>
   						<td><?php echo $rows['area']?></td>
				 </tr>
			 <?php

			 }
			 ?>


			</table>

					</div>

		<button class="accordion">PETROL PUMP</button>
		<div class="panel">
      <table align="center" border="1px" style="color:black;">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Service</th>
          <th>Area</th>
        </tr>
				<?php
				while($rows=mysqli_fetch_assoc($petrolpump))
				{

				 ?>
				 <tr>
					 	  <td><?php echo $rows['name']?></td>
   					 	<td><?php echo $rows['email']?></td>
   						<td><?php echo $rows['mobile']?></td>
   					 	<td><?php echo $rows['service']?></td>
   						<td><?php echo $rows['area']?></td>
				 </tr>
			 <?php

			 }
			 ?>


			</table>
			 		</div>

		<button class="accordion">SUPER MARKET</button>
		<div class="panel">
      <table align="center" border="1px" style="color:black;">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Service</th>
          <th>Area</th>
        </tr>
				<?php
				while($rows=mysqli_fetch_assoc($supermarket))
				{

				 ?>
				 <tr>
					 	  <td><?php echo $rows['name']?></td>
   					 	<td><?php echo $rows['email']?></td>
   						<td><?php echo $rows['mobile']?></td>
   					 	<td><?php echo $rows['service']?></td>
   						<td><?php echo $rows['area']?></td>
				 </tr>
			 <?php

			 }
			 ?>


			</table>

		</div>

		<button class="accordion">PHARAMACY</button>
		<div class="panel">
      <table align="center" border="1px" style="color:black;">
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Service</th>
          <th>Area</th>
        </tr>
				<?php
				while($rows=mysqli_fetch_assoc($pharmacy))
				{

				 ?>
				 <tr>
					 	  <td><?php echo $rows['name']?></td>
   					 	<td><?php echo $rows['email']?></td>
   						<td><?php echo $rows['mobile']?></td>
   					 	<td><?php echo $rows['service']?></td>
   						<td><?php echo $rows['area']?></td>
				 </tr>
			 <?php

			 }
			 ?>


			</table>
			 		</div>




	</div>
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Demand Hub Inc</strong><br>
					Hashu Adwani Memorial Complex, Collector's Colony, <b>
          Chembur,<br> Mumbai, Maharashtra 400074
					 </address>
					<p>
						<i class="icon-phone"></i> (022) 6153 2500 <br>
						<i class="icon-envelope-alt"></i> email@demandhub.com
					</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Demand Hub 2020 All right reserved. By </span><a href="#" Swifty="_self">DemandHub</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/accoshah.js"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
</script>
</body>
</html>
