<!DOCTYPE html>
<html lang="en">

<head>
	<!--DEVELOPED BY TEKZOW TEAM-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script></head>



	<title>MEDISKILLS INSTITUTE</title>
	<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link rel="JavaScript" href="js/mail.js"> 
	
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="submit.js"></script>

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
	<link rel="" href="mail.php">
	<link rel="stylesheet" href="style1.css">
	<link rel="JavaScript" href="submit.js">
	<script src="submit.js"></script>
	
	<script>function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	  }
	  
	  // Close the dropdown menu if the user clicks outside of it
	  window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {
		  var dropdowns = document.getElementsByClassName("dropdown-content");
		  var i;
		  for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show')) {
			  openDropdown.classList.remove('show');
			}
		  }
		}
	  }</script>
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container navigation">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" alt="MEDISKILLS" width="50" height="50" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="Academics.html" target="">Academics</a></li>
				<li><a href="index.html#faculty">Faculty</a></li>
				<li><a href="index.html#placements">Placements</a></li>
				<li><a href="index.html#campus">Campus</a></li>
				
				<li class="dropdown">
					<a onclick="myFunction()" class="dropbtn">courses</a>
					<div id="myDropdown" class="dropdown-content">
						<a href="Academics.html#Critical Care">Critical Care Technician</a>
						<a href="Academics.html#OT">OT & Anesthesia Technician</a>
						<a href="Academics.html#Cardiac">Cardiac Care Technician</a>
						<a href="Academics.html#Lab">Lab Technician</a>
						<a href="Academics.html#Optometry">Optometry</a>
						<a href="Academics.html#Radiology">Radiology & Imaging Technology</a>
						<a href="Academics.html#Microbiology">Microbiology</a>
						<a href="Academics.html#Dental">Dental Technician</a>
						<a href="Academics.html#Dialysis">Dialysis Tech</a>
						<a href="Academics.html#ICU">ICU Technician</a>
						<a href="Academics.html#Health Worker">Mutipurpose Health Worker</a>
						<a href="Academics.html#Emergency">Emergency Trauma Care</a>
						<a href="Academics.html#First Aid">First Aid & Emergency</a>
						<a href="Academics.html#Health">Health & Sanitary Inspector</a>
						<a href="Academics.html#Laproscopy">Laproscopy Assistant</a>
					</div>
				</li>
				<li><a href="index.html#gallery">Gallery</a></li>
				<li ><a href="index.html#about">About Us</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				
			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
                   
                   <div class="col-lg-6" style=" margin: 150px;">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
						    <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
								<h2 class="h-ultra" >ADDMISSIONS OPEN</h2><p>Fill the form and submit to know about courses</p>
							</div>
							<div class="panel panel-skin">
								
							<div class="panel-heading">
									<h3 class="panel-title"><span class="fa fa-pencil-square-o"></span><a href="contact.php"> Join Now</a></h3>
									</div>
									<div class="panel-body">
									<form id="registrationForm" method="post">
										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name="firstname"  class="form-control input-md" required>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name="lastname" class="form-control input-md">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Email</label>
													<input type="email"name="email" id="email" class="form-control input-md">
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6">
												<div class="form-group">
													<label>Phone number</label>
													<input type="text" name="phone" id="phone" class="form-control input-md">
												</div>
											</div>
										</div>
										<button type="submit" class="submit" name="submit">Register</button>
										
								
									 <!-- Popup Div -->
									
										<p class="lead-footer">* We'll contact you by phone & email later</p>
										
									</form>
								    
								</div>
							</div>				
						
						</div>
						</div>
					</div>
</div>



<
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit'])){
// Get form data
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

// Insert data into the database
    $sql = "INSERT INTO contact(firstname, lastname, email, phone) VALUES ('$firstname', '$lastname', '$email', '$phone')";
    $query= mysqli_query($conn,$sql);
    if ($query) {
    ?>
       <script >
        swal({
        title: "Good job!",
        text: "Submitted Successfully",
        icon: "success",
        button: "Thank you!",
        });
    
      
       </script>
    <?php
    }
}

$conn->close();
?>


<section id="about">
	    
	        <footer>
	
		        <div class="container"  >
			         <div class="row">
				        <div class="col-sm-6 col-md-4">
					    <div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
					  <h5>About Mediskills</h5>
					  <p>
					   MEDISKILLS INSTITUTE OF PHARAMEDICAL AND DIAGNOSTIC STUDIES established in the year 2016, q
					   "Best and Top paramedical institute in hosur. Provide 100% job placement, scholarship facility available. DISCIPLINED INSTITUTE. VERY LESS FEES STRUCTURE, Excellent Teaching... <br>STUDENTS ARE EXPOSED FOR PRACTICAL IN FOLLOWING HOSPITALS/ LABS <br> * JANANI HOSPITAL <br> *KALPAVRUSHA HOSPITAL <br>*SS HOSPITAL <br>*BMS MULTISPECIALITY HOSPITAL <br>*SRI CHANDRASEKARA HOSPITAL <br>*LAKSHMI HOSPITAL <br> *PMK SCANS AND LABS  <br>*UNISCAN <br> *DR. NITHYA HOSPITAL <br> *MALAR MULTISPECIALITY <br>*DEEPAM <br>*GOWTHAMI LABS * and other multispecialities.." </p>
				    </div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Information</h5>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Laboratory</a></li>
							<li><a href="#">Medical treatment</a></li>
							<li><a href="#">Terms & conditions</a></li>
						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>MediSkills center</h5>
						<p>
							
						</p>
						<ul>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-calendar-o fa-stack-1x fa-inverse"></i>
								</span> Monday - Saturday, 9am to 4pm
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-phone fa-stack-1x fa-inverse"></i>
								</span> Phone: 073734 88977
							</li>
							<li>
								<span class="fa-stack fa-lg">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i>
								</span> hello@mediskills.com
							</li>

						</ul>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Our location</h5>
						<p>Address: 2nd floor, B.R Tower, Denkanikotta Rd, opposite CSI CHURCH, Shanthi Nagar, Hosur, Tamil Nadu 635109</p>		
						
					</div>
					</div>
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">
						<h5>Follow us</h5>
						<ul class="company-social">
								<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li class="social-vimeo"><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
								<li class="social-dribble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
					</div>
				</div>
			</div>	
		    </div>
		    </div>
	    </footer>
    
    </section>

</html>